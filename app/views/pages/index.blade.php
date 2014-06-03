@extends('layouts.master')

@section('content')
<div class="starter-template">
    <h1>
        {{ Auth::check() ? "Welcome to the Dashboard, " . Auth::user()->username : "Why not signup?" }}
    </h1>
</div>
@stop