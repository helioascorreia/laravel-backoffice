@extends('layouts.back')

@section('content')
<div class="container">
    <div class="mb10"></div>
    @if($errors->has('mess'))
        <div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Error!</strong> Check your username and password.
        </div>
    @endif

    <div class="form-signin">
        <h1 class="form-signin-header">Login</h1>
        {{ Form::open(['route' => 'sessions.store']) }}
        <div class="form-group">
            {{ Form::label('username', 'Username: ')}}
            {{ Form::text('username',NULL,['class' => 'form-control']) }}
            {{ $errors->first('username', '<span class="error">:message</span>') }}
        </div>

        <div class="form-group">
            {{ Form::label('password', 'Password: ')}}
            {{ Form::password('password',['class' => 'form-control']) }}
            {{ $errors->first('password', '<span class="error">:message</span>') }}
        </div>

        <div class="form-group">
            {{ Form::submit('Login', ['class' => 'btn btn-default']) }}
        </div>
        {{ Form::close() }}
    </div>
</div>
@stop

