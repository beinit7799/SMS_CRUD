@extends('layouts.app')

@section('title', 'Edit Student')

@section('content')
  <h1>Edit Student</h1>

  @if ($errors->any())
    <div class="alert">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <form action="{{ route('student.update', $student->id) }}" method="POST" class="student-form">
    @csrf
    @method('PUT')

    <label for="name">Name <span class="required">*</span></label>
    <input type="text" name="name" id="name" value="{{ old('name', $student->name) }}" required>

    <label for="email">Email <span class="required">*</span></label>
    <input type="email" name="email" id="email" value="{{ old('email', $student->email) }}" required>

    <label for="phone">Phone</label>
    <input type="text" name="phone" id="phone" value="{{ old('phone', $student->phone) }}">

    <label for="dob">Date of Birth</label>
    <input type="date" name="dob" id="dob" value="{{ old('dob', $student->dob) }}">

    <label for="address">Address</label>
    <input type="text" name="address" id="address" value="{{ old('address', $student->address) }}">

    <label for="course">Course</label>
    <input type="text" name="course" id="course" value="{{ old('course', $student->course) }}">

    <button type="submit" class="btn submit">Update Student</button>
  </form>
@endsection

@push('styles')
<style>
  .student-form {
    max-width: 600px;
    margin: 2rem auto;
    display: flex;
    flex-direction: column;
    gap: 1rem;
    background: white;
    padding: 2rem;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
  }

  .student-form label {
    font-weight: bold;
    color: #333;
  }

  .student-form input {
    padding: 0.6rem;
    border: 1px solid #ccc;
    border-radius: 4px;
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

  .required {
    color: red;
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
