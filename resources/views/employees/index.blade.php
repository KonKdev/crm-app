<!-- resources/views/employees/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Λίστα Εργαζομένων</h1>
    <a href="{{ route('employees.create') }}" class="btn btn-primary mb-3">Προσθήκη Εργαζομένου</a>
    <table class="table">
        <thead>
            <tr>
                <th>Όνομα</th>
                <th>Email</th>
                <th>Τηλέφωνο</th>
                <th>Ενέργειες</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $employee)
                <tr>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->email }}</td>
                    <td>{{ $employee->phone }}</td>
                    <td>
                        <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-sm btn-info">Επεξεργασία</a>

                        <form action="{{ route('employees.destroy', $employee->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Διαγραφή</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
