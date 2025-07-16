@extends('layouts.auth')

@section('title', 'Forgot Password')

@section('content')
<div class="auth-container">
  <h2>Forgot Password</h2>

  @if (session('status'))
    <div class="alert">{{ session('status') }}</div>
  @endif

  <form method="POST" action="{{ route('password.email') }}">
    @csrf

    <label for="email">Enter your registered email</label>
    <input type="email" name="email" required>

    <button type="submit" class="btn submit">Send Reset Link</button>

    <p class="link-bottom">
      <a href="{{ route('login') }}">Back to Login</a>
    </p>
  </form>
</div>
@endsection
@push('styles')
<style>
  .auth-container {
    max-width: 400px;
    margin: 4rem auto;
    padding: 2rem;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
  }

  .auth-container h2 {
    text-align: center;
    margin-bottom: 1.5rem;
    color: #333;
  }

  .auth-container form {
    display: flex;
    flex-direction: column;
    gap: 1rem;
  }

  label {
    font-weight: bold;
    color: #333;
    text-align: left;
  }

  input {
    padding: 0.6rem;
    border: 1px solid #ccc;
    border-radius: 4px;
    width: 100%;
  }

  .btn.submit {
    background-color: #4A90E2;
    color: white;
    padding: 0.6rem;
    font-weight: bold;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  .btn.submit:hover {
    background-color: #3b7bc0;
  }

  .forgot {
    text-align: right;
  }

  .forgot a {
    color: #4A90E2;
    font-size: 0.9rem;
    text-decoration: none;
  }

  .forgot a:hover {
    text-decoration: underline;
  }

  .link-bottom {
    margin-top: 1rem;
    text-align: center;
    font-size: 0.95rem;
  }

  .link-bottom a {
    color: #4A90E2;
    text-decoration: none;
    font-weight: 500;
  }

  .alert {
    background-color: #ffe0e0;
    padding: 1rem;
    border-left: 5px solid #e74c3c;
    color: #a94442;
    margin-bottom: 1rem;
    border-radius: 4px;
  }
</style>
@endpush

