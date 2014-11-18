<?php

/**
* Authentication Controller
*/
class AuthController extends BaseController
{
  /**
   * Login
   * @return void
   */
  public function login()
  {
    $credentials = [
      // 'username' => Input::get('username'),
      'email'    => Input::get('email'),
      'password' => Input::get('password')
    ];

    if(Auth::attempt($credentials))
    {
      Mail::send('emails.welcome', $credentials, function($message)
        {
            $message->to('janepeters94@gmail.com', 'Loise')
            ->subject('Welcome to suppershopers app!');
        });

      return Redirect::route('advertisments');
    }
    else
    {
    return Redirect::back()->with('message', 'Check Username and Password');
    }
  }


  /**
   * Sign Up
   * @return void
   */
  public function signup()
  {
    $data = User::all();
    $data = [
       'username' => Input::get('username'),
       'email'    => Input::get('email'),
      'password' => Input::get('password')
      ];
    $validation = Validator::make($data, User::$rules);

    if($validation->passes())
    {
      // Create User account
      $user = new User;
      $user->username = $data['username'];
      $user->email    =$data['email'];
      $user->password = Hash::make($data['password']);
      $user->save();


      // Login User
      Auth::login($user);

        Mail::send('emails.welcome', $data, function($message)
        {
            $message->to('loisenjoki6@gmail.com', 'Loise')
            ->subject('Welcome to suppershopers app!');
        });

      return Redirect::route('advertisments');
    }
  }


  /**
   * Login Page
   * @return void
   */
  public function loginPage()
  {
    return View::make('auth.login');
  }

  /**
   * Sign Up Page
   * @return void
   */
  public function signupPage()
  {
    return View::make('auth.signup');
  }

  /**
   * Logout
   * @return void
   */
  public function logout()
  {
    Auth::logout();

    return Redirect::route('signin');
  }

  public function advertismentspage()
  {
    return View::make('pages.advertisments');
  }

  public function account(){
    // $id = User::findorFail($id);
    $id = Auth::user()->id;
    $users = DB::table('users')->where('id', $id)->get();
    // return View::make('account', compact('users'));
    return Redirect::route('advertisments', compact('users'));
  }
}
