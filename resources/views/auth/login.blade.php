@extends('layouts.master')

@section('content')

    <p>Don't have an account? <a href='/register'>Register here...</a></p>

    <h1>Login</h1>

    @if(count($errors) > 0)
        <ul class='errors'>
            @foreach ($errors->all() as $error)
                <li><span class='fa fa-exclamation-circle'></span> {{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method='POST' action='/login'>

        {!! csrf_field() !!}

        <label for='email'>Email</label>
        <div class='multi-field-wrapper'>
            <input type='text' name='email' id='email' value='{{ old('email') }}'>
        </div>
        
        <label for='password'>Password</label>
        <div class='multi-field-wrapper'>
            <input type='password' name='password' id='password' value='{{ old('password') }}'>
        </div>

        <div class='multi-field-wrapper'>
            <input type='checkbox' name='remember' id='remember'>
            <label for='remember' class='checkboxLabel'>Remember me</label>
        </div>
        <button type='submit' class='btn btn-primary'>Login</button>
        <br>
        <br>
    </form>
@stop