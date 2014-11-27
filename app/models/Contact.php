<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Contact extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'contacts';

	protected $fillable = ['name','occupation','telephone','email','message'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');
	protected $guarded = array('passord','remember_token');
	public static $rules = [
			'name' => 'required',
			'occupation' => 'required',
			'telephone' => 'required',
			'email'    =>  'required|unique:contacts,email',
			'message' => 'required'

	];

}
