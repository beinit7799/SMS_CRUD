@extends('layouts.app')

@section('title', 'Student List')

@section('content')
  <h1>Student List</h1>

  <!-- Search Form -->
  <div class="table-header">
    <form action="{{ route('student.list') }}" method="GET" class="search-form">
    <input type="text" name="search" placeholder="Search by name..." value="{{ $search ?? '' }}"/> 
       <button type="submit">Search</button>
    </form>
  </div>

  <!-- Student Table -->
  <table class="student-table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Class</th>
        <th>Phone</th>
        <th>Date Of Birth</th>
        <th>Address</th>
        <th>Course</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($students as $student)
        <tr>
          <td>{{ $student->id }}</td>
          <td>{{ $student->name }}</td>
          <td>{{ $student->email }}</td>
          <td>{{ $student->class }}</td>
          <td>{{ $student->phone }}</td>
          <td>{{ $student->dob }}</td>
          <td>{{ $student->address }}</td>
          <td>{{ $student->course }}</td>
          <td>
            <div class="action-buttons">
              <a href="{{ route('student.edit', $student->id) }}" class="btn edit">Edit</a>
              <form action="{{ route('student.destroy', $student->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn delete" onclick="return confirm('Are you sure?')">Delete</button>
              </form>
            </div>
          </td>
        </tr>
      @empty
        <tr>
          <td colspan="9">No students found.</td>
        </tr>
      @endforelse
    </tbody>
  </table>
@endsection

@push('styles')
<style>
  .table-header {
  display: flex;
  justify-content: flex-end;
  margin-top: 1rem;
}
    .action-buttons {
  display: flex;
  gap: 0.5rem;
}

.action-buttons form {
  margin: 0;
}

  .student-table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 2rem;
    background-color: white;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
  }


  .student-table th,
  .student-table td {
    padding : 1rem;
    text-align: left;
    border-bottom: 1px solid #e5e5e5;
  }

  .student-table th {
    background-color: #4A90E2;
    color: white;
  }

  .btn {
    padding: 0.4rem 0.8rem;
    border: none;
    border-radius: 4px;
    text-decoration: none;
    font-size: 0.9rem;
    cursor: pointer;
    transition: background-color 0.2s ease;
  }

  .btn.edit {
    background-color: #3498db;
    color: white;
  }

  .btn.edit:hover {
    background-color: #2980b9;
  }

  .btn.delete {
    background-color: #e74c3c;
    color: white;
    margin-left: 0.5rem;
  }

  .btn.delete:hover {
    background-color: #c0392b;
  }
  
.search-form {
  display: flex;
  gap: 0.5rem;
}

.search-form input[type="text"] {
  padding: 0.5rem;
  border: 1px solid #ccc;
  border-radius: 4px;
}

.search-form button {
  padding: 0.5rem 1rem;
  background-color: #4A90E2;
  color: white;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

.search-form button:hover {
  background-color: #357ABD;
}

</style>
@endpush
