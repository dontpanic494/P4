@extends('layouts.master')

@section('content')

    <p>Already have an account? <a href='/login'>Login here...</a></p>

    <h1>Register</h1>

    @if(count($errors) > 0)
        <ul class='errors'>
            @foreach ($errors->all() as $error)
                <li><span class='fa fa-exclamation-circle'></span> {{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method='POST' action='/register'>
        {!! csrf_field() !!}

        <label for='name'>Name</label>
        <div class='multi-field-wrapper'>
            <input type='text' name='name' id='name' value='{{ old('name') }}'>
        </div>

        <label for='email'>Email</label>
        <div class='multi-field-wrapper'>
            <input type='text' name='email' id='email' value='{{ old('email') }}'>
        </div>

        <label for='password'>Password</label>
        <div class='multi-field-wrapper'>
            <input type='password' name='password' id='password'>
        </div>

        <label for='password_confirmation'>Confirm Password</label>
        <div class='multi-field-wrapper'>
            <input type='password' name='password_confirmation' id='password_confirmation'>
        </div>
    <br>
        <button type='submit' class='btn btn-primary'>Register</button>
    <br>
    <br>
    </form>

@stop