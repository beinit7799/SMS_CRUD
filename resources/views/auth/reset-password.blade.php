@extends('layouts.auth')

@section('title', 'Reset Password')

@section('content')
<div class="auth-container">
  <h2>Reset Password</h2>

  @if(session('status'))
    <div class="alert">{{ session('status') }}</div>
  @endif

  <form method="POST" action="{{ route('password.update') }}">
    @csrf

    <input type="hidden" name="token" value="{{ $token }}">
    
    <label for="email">Email</label>
    <input type="email" name="email" value="{{ old('email') }}" required>

    <label for="password">New Password</label>
    <input type="password" name="password" required>

    <label for="password_confirmation">Confirm Password</label>
    <input type="password" name="password_confirmation" required>

    <button type="submit" class="btn submit">Reset Password</button>
  </form>
</div>
@endsection
