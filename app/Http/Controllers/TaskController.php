<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required|date',
            'project_name' => 'required|string|max:255',
            'team' => 'required|string|max:255',
            'fileUpload' => 'nullable|file|mimes:jpg,png,pdf,doc,docx',
            'task_description' => 'nullable|string',
        ]);

        $filePath = $request->file('fileUpload') ? $request->file('fileUpload')->store('uploads', 'public') : null;

        Task::create([
            'date' => $request->date,
            'project_name' => $request->project_name,
            'team' => $request->team,
            'file_path' => $filePath,
            'task_description' => $request->task_description,
        ]);

        return redirect()->route('Emp_Tasks')->with('success', 'Task created successfully.');
    }
}
