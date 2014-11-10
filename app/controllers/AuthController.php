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
      'username' => Input::get('username'),
      'email'    => Input::get('email'),
      'password' => Input::get('password')
    ];

    if(Auth::attempt($credentials))
    {
      return Redirect::route('pages.advertisments');
    }

    return Redirect::back()->with('message', 'Check Username and Password');
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

      return Redirect::route('pages.advertisments');
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

    return Redirect::route('login');
  }

  public function advertismentspage()
  {
    return View::make('pages.advertisments');
  }
}
