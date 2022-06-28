@extends('base')

@section('content')

<h1>DASHBOARD</h1>

<p>
    <strong>WELCOME: {{auth()->user()->name}}</strong>
</p>

@endsection
