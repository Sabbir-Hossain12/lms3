<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdmissionScholarship;
use Illuminate\Http\Request;

class ScholarshipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $scholarship = AdmissionScholarship::first();
        
        return view('backend.pages.admissions.scholarship', compact('scholarship'));
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
//      dd($request->all());
        $scholarship = new AdmissionScholarship();
        $scholarship->title = $request->title;
        $scholarship->description = $request->description;
        
        if ($request->hasFile('document')) {
            $file = $request->file('document');
            $filename = time().uniqid().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('backend/upload/scholarship/'), $filename);
            $scholarship->document = 'backend/upload/scholarship/'.$filename;
        }
        
        $save = $scholarship->save();
        
        if ($save) {
            
            return redirect()->back()->with('success', 'Scholarship Updated Successfully');
        }
        
        return redirect()->back()->with('error', 'Something went wrong');
        
        
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
        
        $scholarship = AdmissionScholarship::find($id);
        $scholarship->title = $request->title;
        $scholarship->description = $request->description;
        
        if ($request->hasFile('document')) {
            
            if ($scholarship->document && file_exists(public_path($scholarship->document))) {
                unlink(public_path($scholarship->document));
            }
            
            $file = $request->file('document');
            $filename = time().uniqid().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('backend/upload/scholarship/'), $filename);
            $scholarship->document = 'backend/upload/scholarship/'.$filename;
        }
        
        $save = $scholarship->save();
        
        if ($save) {
            
            return redirect()->back()->with('success', 'Scholarship Updated Successfully');
        }
        
        return redirect()->back()->with('error', 'Something went wrong');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
