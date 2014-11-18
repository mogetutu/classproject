@extends('layouts.master')
@section('content')
 <div id="login">
  <div class="page-header">
    <div class="pull-right">
      <a href="/signup" class="btn btn-primary">Sign Up</a>
    </div>
    <h2>Login</h2>
  </div>
  {{Form::open(['action' => 'AuthController@login'])}}
  <!-- <div class="form-group">
    {{Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'Username'])}}
  </div> -->
  <div class="form-group">
    {{Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'email'])}}
  </div>
  <div class="form-group">
    {{Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password'])}}
  </div>
  <div class="form-group">
    {{Form::submit('Login', ['class' => 'btn btn-primary'])}}
  </div>
  {{Form::close()}}
  </div>
@stop
