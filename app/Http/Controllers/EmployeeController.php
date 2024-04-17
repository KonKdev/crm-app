<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Επικύρωση των δεδομένων που λαμβάνονται από τη φόρμα
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:employees',
            'phone' => 'nullable|string|max:20',
        ]);

        // Δημιουργία νέου εργαζομένου με τα δεδομένα που λήφθηκαν από τη φόρμα
        $employee = Employee::create($validatedData);

        // Ανακατεύθυνση του χρήστη στη λίστα εργαζομένων μετά τη δημιουργία
        return redirect()->route('employees.index')->with('success', 'Ο εργαζόμενος δημιουργήθηκε επιτυχώς.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        return view('employees.edit', compact('employee'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    {
        // Επικυρώστε τα δεδομένα της φόρμας
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'nullable|string|max:20',
        ]);
    
        // Ενημερώστε τα στοιχεία του εργαζομένου
        $employee->update($validatedData);
    
        // Ανακατεύθυνση στην λίστα των εργαζομένων με μήνυμα επιτυχίας
        return redirect()->route('employees.index')->with('success', 'Τα στοιχεία του εργαζομένου ανανεώθηκαν με επιτυχία.');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();

        return redirect()->route('employees.index')->with('success', 'Ο εργαζόμενος διαγράφηκε επιτυχώς.');
    }
}
