@extends('layouts.auth')

@section('title', 'Register')

@section('content')
<div class="auth-container">
  <h2>Sign Up</h2>

  <form method="POST" action="{{ route('register') }}">
    @csrf

    <label for="name">Name</label>
    <input type="text" name="name" value="{{ old('name') }}" required>

    <label for="email">Email</label>
    <input type="email" name="email" value="{{ old('email') }}" required>

    <label for="password">Password</label>
    <input type="password" name="password" required>

    <label for="password_confirmation">Confirm Password</label>
    <input type="password" name="password_confirmation" required>

    <button type="submit" class="btn submit">Sign Up</button>

    <p class="link-bottom">
      Already have an account?
      <a href="{{ route('login') }}">Login</a>
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
    font-weight: 600;
  }

  .auth-container form {
    display: flex;
    flex-direction: column;
    gap: 1rem;
  }

  label {
    font-weight: 600;
    color: #333;
    text-align: left;
  }

  input {
    padding: 0.6rem;
    border: 1px solid #ccc;
    border-radius: 4px;
    width: 100%;
    font-size: 1rem;
    transition: border-color 0.3s ease;
  }

  input:focus {
    border-color: #4A90E2;
    outline: none;
  }

  .btn.submit {
    background-color: #4A90E2;
    color: white;
    padding: 0.6rem;
    font-weight: 700;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 1rem;
    margin-top: 1rem;
    transition: background-color 0.3s ease;
  }

  .btn.submit:hover {
    background-color: #3b7bc0;
  }

  .link-bottom {
    margin-top: 1rem;
    text-align: center;
    font-size: 0.95rem;
    color: #555;
  }

  .link-bottom a {
    color: #4A90E2;
    text-decoration: none;
    font-weight: 600;
  }

  .link-bottom a:hover {
    text-decoration: underline;
  }
</style>
@endpush

