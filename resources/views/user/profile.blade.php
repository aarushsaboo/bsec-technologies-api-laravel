@extends('layouts.app')

@section('title', 'User Profile')

@section('content')
    <h1>User Profile</h1>
    <div>
        <p>Name: {{ $user->name }}</p>
        <p>Email: {{ $user->email }}</p>
    </div>
@endsection