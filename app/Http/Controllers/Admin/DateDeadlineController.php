<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdmissionDeadline;
use Illuminate\Http\Request;

class DateDeadlineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dateDeadline = AdmissionDeadline::first();
        
        return view('backend.pages.admissions.date-deadline', compact('dateDeadline'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dateDeadlines = new AdmissionDeadline();
        $dateDeadlines->title = $request->title;
        $dateDeadlines->description = $request->description;
        $dateDeadlines->academic_term = $request->academic_term;
        $dateDeadlines->desired_start_date = $request->desired_start_date;
        $dateDeadlines->application_last_date	 = $request->application_last_date	;
       
        $dateDeadlines->save();
        
        return redirect()->back()->with('success', 'Date and Deadline Created Successfully');
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
        $dateDeadlines = AdmissionDeadline::find($id);
        $dateDeadlines->title = $request->title;
        $dateDeadlines->description = $request->description;
        $dateDeadlines->academic_term = $request->academic_term;
        $dateDeadlines->desired_start_date = $request->desired_start_date;
        $dateDeadlines->application_last_date = $request->application_last_date	;

        $dateDeadlines->save();

        return redirect()->back()->with('success', 'Date and Deadline Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
