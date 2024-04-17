
@extends('layouts.app')

@section('content')
    <h1>Δημιουργία Νέας Εταιρείας</h1>
    <form action="{{ route('companies.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Όνομα:</label>
            <input type="text" name="name" class="form-control" id="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control" id="email" required>
        </div>
        <div class="form-group">
            <label for="activity">Περιγραφή Δραστηριότητας:</label>
            <textarea name="activity" class="form-control" id="activity" rows="3" required></textarea>
        </div>
        <div class="form-group">
            <label for="website">Ιστοσελίδα:</label>
            <input type="text" name="website" class="form-control" id="website">
        </div>
        <div class="form-group">
            <label for="logo">Λογότυπο:</label>
            <input type="file" name="logo" class="form-control-file" id="logo">
        </div>
        <button type="submit" class="btn btn-primary">Υποβολή</button>
    </form>
@endsection
