@extends('layouts.master')
@section('content')
  <div class="page-header">
    <h2>Contact info</h2>
  </div>
{{Form::open(['route' => 'contact.store'])}}
  <div class="form-group">
    {{Form::text('name',  null,['class' => 'form-control', 'placeholder' => 'name'])}}
  </div>
  <div class="form-group">
    {{Form::text('occupation', null, ['class' => 'form-control', 'placeholder' => 'occupation'])}}
  </div>
  <div class="form-group">
    {{Form::text('telephone', null, ['class' => 'form-control', 'placeholder' => 'telephone Number'])}}
  </div>
  <div class="form-group">
    <label>Email</label>
    {{Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email'])}}
  </div>
  <div class="form-group">
    <label>Message</label>
    {{Form::textarea('message', null, ['class' => 'form-control', 'placeholder' => 'Message'])}}
  </div>
  <div class="form-group">
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
  </div>
{{Form::close()}}

@stop
