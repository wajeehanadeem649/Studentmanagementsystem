@extends('layout')

@section('content')

<div class="col-md-2"></div>
<div class="col-md-8">
    <button id="toggleFormBtn" class="btn btn-success mb-3">Add New</button>

    <div id="studentForm" style="display: none;">
        <div class="form-area p-4 bg-light rounded shadow-sm border">
            <form method="post" action="{{ route('students.store') }}">
                @csrf
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="studentName" class="form-label fw-semibold" style="color:rgb(44, 43, 43);">Student Name</label>
                        <input 
                            type="text" 
                            class="form-control form-control-lg" 
                            id="studentName" 
                            name="name" 
                            placeholder="Enter full name" 
                            required
                        >
                    </div>
                    <div class="col-md-6">
                        <label for="mobile" class="form-label fw-semibold"style="color:rgb(44, 43, 43);">Mobile Number</label>
                        <input 
                            type="tel" 
                            class="form-control form-control-lg" 
                            id="mobile" 
                            name="mobile" 
                            placeholder="e.g. +1234567890" 
                            pattern="[0-9+]{10,15}"
                            required
                        >
                    </div>
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label fw-semibold"style="color:rgb(44, 43, 43);">Address</label>
                    <input 
                        type="text" 
                        class="form-control form-control-lg" 
                        id="address" 
                        name="address" 
                        placeholder="Enter your address" 
                        required
                    >
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-warning btn-lg px-5 fw-bold">
                        Save
                    </button>
                </div>
            </form>
        </div>
        
    </div>
</div>

<table id="studentsTable" class="table table-dark">
    <thead>
      <tr>
        <th>#</th>
        <th>Student Name</th>
        <th>Address</th>
        <th>Mobile</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($students as $key => $student)
    <tr>
      <td>{{ $key + 1 }}</td>
      <td>{{ $student->name }}</td>
      <td>{{ $student->address }}</td>
      <td>{{ $student->mobile }}</td>
      <td>
        <a href="{{ route('students.show', $student->id) }}" class="btn btn-warning">View</a>
|
        <form action="{{ route('students.edit', $student->id) }}" style="display:inline">
          <button class="btn btn-primary">Edit</button>
        </form>
        |
        <form method="POST" action="{{ route('students.destroy', $student->id) }}" style="display:inline">
          @csrf
          @method('DELETE')
          <button class="btn btn-danger">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
    </tbody>
</table>

@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.getElementById('toggleFormBtn').addEventListener('click', function () {
        const form = document.getElementById('studentForm');
        const table = document.getElementById('studentsTable');

        if (form.style.display === 'none') {
            // Show form, hide table
            form.style.display = 'block';
            table.style.display = 'none';
            this.textContent = 'Back to List'; // change button text optionally
        } else {
            // Hide form, show table
            form.style.display = 'none';
            table.style.display = 'table';
            this.textContent = 'Add New';
        }
    });
</script>
@endpush
