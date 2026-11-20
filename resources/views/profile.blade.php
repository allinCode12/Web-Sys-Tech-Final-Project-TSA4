@extends('layouts.app')
@section('title', 'Profile | Tasks for Today')
@section('content')
    <div class="card">
        <p class="eyebrow">Account information</p>
        <h1>User Profile</h1>
        <p><strong>Username:</strong> {{ $user->username }}</p>
        <p><strong>Full Name:</strong> {{ $user->full_name }}</p>
        <p><strong>Email:</strong> {{ $user->email }}</p>
    </div>
@endsection