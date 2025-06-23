@extends('layout')

@section('content')
<div class="container mt-5">
    <h2>Edit Student</h2>
    <form method="POST" action="{{ route('students.update', $student->id) }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input name="name" class="form-control" value="{{ $student->name }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Mobile</label>
            <input name="mobile" class="form-control" value="{{ $student->mobile }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Address</label>
            <input name="address" class="form-control" value="{{ $student->address }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('students.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
