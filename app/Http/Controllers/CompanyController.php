<?php

namespace App\Http\Controllers;
use App\Models\Company;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companies = Company::all();
        return view('companies.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('companies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // Επικυρώστε τα δεδομένα της φόρμας
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255',
        'activity' => 'required|string',
        'website' => 'nullable|string|url',
        'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Εάν έχει οριστεί αρχείο λογότυπου, αποθηκεύστε το
    if ($request->hasFile('logo')) {
        $logoPath = $request->file('logo')->store('logos', 'public');
        $validatedData['logo'] = $logoPath;
    }

    // Δημιουργήστε τη νέα εταιρεία στη βάση δεδομένων
    $company = Company::create($validatedData);

    // Επιστροφή στη λίστα των εταιρειών με μήνυμα επιτυχίας
    return redirect()->route('companies.index')->with('success', 'Η εταιρεία δημιουργήθηκε με επιτυχία.');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
