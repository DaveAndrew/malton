@extends('layouts.master')
@section('meta-title', 'Login')
@section('content')
<h1>Login</h1>

    {{ Form::open(['route' => 'sessions.store', 'class' => 'form-signin']) }}

    <h2 class="form-signin-heading">Please log in</h2>
    <!-- Email Field -->
    <div class="form-group">
        <!-- {{ Form::label('email', 'Email:') }} -->
        {{ Form::text('email', null, ['class' => 'form-control', 'required' => 'required','placeholder' => 'Email address'])  }}
        {{ errors_for('email', $errors) }}
    </div>

    <!-- Password Field -->
    <div class="form-group">
        <!--{{ Form::label('password', 'Password:') }} -->
        {{ Form::password('password', ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Password'])  }}
        {{ errors_for('password', $errors) }}

    </div>

    <label class="checkbox">
        <input type="checkbox" value="remember-me"> Remember me
    </label>

    <!-- Commit Account Field -->

    {{ Form::submit('Login', ['class' => 'btn btn-lg btn-primary btn-block'])  }}


    @if (Session::has('flash_message'))
        <div class="form-group">
            <p>{{ Session::get('flash_message') }}</p>
        </div>
    @endif

    {{ Form::close() }}


<div class="container">

</div> <!-- /container -->

@stop