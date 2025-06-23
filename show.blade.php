@extends('layout')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Student Details</h2>
    <div class="card p-4 shadow-sm">
        <p><strong>Name:</strong> {{ $student->name }}</p>
        <p><strong>Mobile:</strong> {{ $student->mobile }}</p>
        <p><strong>Address:</strong> {{ $student->address }}</p>
        <a href="{{ route('students.index') }}" class="btn btn-secondary mt-3">Back to List</a>
    </div>
</div>
@endsection
