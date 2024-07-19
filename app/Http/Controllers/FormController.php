<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    // Method to show the profile form
    public function showProfileForm()
    {
        return view('Profile'); // Ensure 'Profile' matches 'Profile.blade.php'
    }
    public function showEmp_DTRForm()
    {
        return view('Emp_DTR'); // Ensure 'Emp_DTR' matches 'Emp_DTR.blade.php'
    }
    public function showTasksForm()
    {
        return view('Emp_Tasks'); 
    }
    public function showTicketsForm()
    {
        return view('Emp_Tickets'); 
    }

    public function showLoginForm()
    {
        return view('LoginPage'); 
    }

    // Method to handle form submission
    public function submitForm(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'employee_id' => 'required|numeric|min:0|max:5000',
            'days' => 'required|string',
            'first_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'employment_status' => 'required|string',
            'department' => 'required|string',
            'client_service_team' => 'nullable|string',
            'management_team' => 'nullable|string',
            'digital_service_team' => 'nullable|string',
            'position' => 'required|string',
            'tasks' => 'required|string',
        ]);

        // Process the data (e.g., save to the database)
        // ...

        // Redirect back to the profile form with a success message
        return redirect()->route('show.form')->with('success', 'Form submitted successfully!');
    }
}
