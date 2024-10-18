@extends('layouts.app')

@section('title', 'User')

@section('content')
<h1 class="font-bold">User Profile: </h1>

<h3>{{ $user->name }}</h3>

@endsection