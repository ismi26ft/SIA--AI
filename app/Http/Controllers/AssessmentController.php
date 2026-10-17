<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssessmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $assessments = \App\Models\Assessment::with([
        'classRoom',
        'subject',
        'teacher'
    ])->latest()->get();

    return view('assessments.index', compact('assessments'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
    $classes = \App\Models\ClassRoom::all();
    $subjects = \App\Models\Subject::all();
    $teachers = \App\Models\Teacher::all();

    return view('assessments.create', compact(
        'classes',
        'subjects',
        'teachers'
    ));
}
    /**
     * Store a newly created resource in storage.
     */

public function store(Request $request)
{
    $validated = $request->validate([
        'nama_asesmen' => 'required|string|max:255',
        'class_id' => 'required|exists:classes,id',
        'subject_id' => 'required|exists:subjects,id',
        'teacher_id' => 'required|exists:teachers,id',
        'jenis_asesmen' => 'required|in:tugas,kuis,proyek,uts,uas,sumatif,lainnya',
        'tanggal' => 'nullable|date',
        'deskripsi' => 'nullable|string',
    ]);

    \App\Models\Assessment::create($validated);

    return redirect()
        ->route('assessments.index')
        ->with('success', 'Asesmen berhasil ditambahkan.');
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
    $assessment = \App\Models\Assessment::findOrFail($id);

    $classes = \App\Models\ClassRoom::all();
    $subjects = \App\Models\Subject::all();
    $teachers = \App\Models\Teacher::all();

    return view('assessments.edit', compact(
        'assessment',
        'classes',
        'subjects',
        'teachers'
    ));
}

    /**
     * Update the specified resource in storage.
     */
    
    public function update(Request $request, string $id)
{
    $validated = $request->validate([
        'nama_asesmen' => 'required|string|max:255',
        'class_id' => 'required|exists:classes,id',
        'subject_id' => 'required|exists:subjects,id',
        'teacher_id' => 'required|exists:teachers,id',
        'jenis_asesmen' => 'required|in:tugas,kuis,proyek,uts,uas,sumatif,lainnya',
        'tanggal' => 'nullable|date',
        'deskripsi' => 'nullable|string',
    ]);

    $assessment = \App\Models\Assessment::findOrFail($id);
    $assessment->update($validated);

    return redirect()
        ->route('assessments.index')
        ->with('success', 'Asesmen berhasil diperbarui.');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
