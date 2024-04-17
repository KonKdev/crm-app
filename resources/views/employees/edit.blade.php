@extends('layouts.app')

@section('content')
    <h1>Επεξεργασία Εργαζομένου</h1>

    <form action="{{ route('employees.update', $employee->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Όνομα</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $employee->name }}" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $employee->email }}" required>
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Τηλέφωνο</label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{ $employee->phone }}">
        </div>

        <button type="submit" class="btn btn-primary">Αποθήκευση</button>
    </form>

@endsection


    
<script>
    console.log("Το όνομα του εργαζομένου: ", "{{ $employee->name }}");
    console.log("Το email του εργαζομένου: ", "{{ $employee->email }}");
    console.log("Το τηλέφωνο του εργαζομένου: ", "{{ $employee->phone }}");
</script>