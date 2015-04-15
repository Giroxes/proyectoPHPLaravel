@extends("layout")
@section("content")
    @if(Session::has('error'))
        {{ Session::pull('error') }}
    @endif
    {{ Form::open(array('url'=>'user/reset', 'method'=>'POST')) }}
        {{ Form::label('email', 'E-mail') }}
        {{ Form::text('email') }}

        {{ Form::label('password', 'Password') }}
        {{ Form::password('password') }}

        {{ Form::label('password_confirmation', 'Password Confirmation') }}
        {{ Form::password('password_confirmation') }}
        <input type="hidden" name="token" value="{{ $token }}">
        <input type="submit" value="Reset Password">
    {{ Form::close() }}
@stop