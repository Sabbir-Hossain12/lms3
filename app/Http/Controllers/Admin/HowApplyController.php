<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HowApply;
use Illuminate\Http\Request;

class HowApplyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $howApply = HowApply::first();
        return view('backend.pages.website.how-apply', compact('howApply'));
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

       $howApply = new HowApply();
       $howApply->icon_1 = $request->icon_1;
       $howApply->title_1 = $request->title_1;
       $howApply->description_1 = $request->description_1;

       $howApply->icon_2 = $request->icon_2;
       $howApply->title_2 = $request->title_2;
       $howApply->description_2 = $request->description_2;
       
       $howApply->icon_3 = $request->icon_3;
       $howApply->title_3 = $request->title_3;
       $howApply->description_3 = $request->description_3;

        $howApply->long_desc = $request->long_desc;


        if ($request->hasFile('form_file')) {
            
            $file = $request->file('form_file');
            $filename = time() .uniqid(). '.' . $file->getClientOriginalExtension();
            $file->move(public_path('backend/upload/how-apply/'), $filename);
            $howApply->form_file = 'backend/upload/how-apply/'. $filename;

        }
       
       $howApply->save();
       return redirect()->back()->with('success', 'Data updated successfully');
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

        $howApply = HowApply::find($id);
        $howApply->icon_1 = $request->icon_1;
        $howApply->title_1 = $request->title_1;
        $howApply->description_1 = $request->description_1;

        $howApply->icon_2 = $request->icon_2;
        $howApply->title_2 = $request->title_2;
        $howApply->description_2 = $request->description_2;

        $howApply->icon_3 = $request->icon_3;
        $howApply->title_3 = $request->title_3;
        $howApply->description_3 = $request->description_3;
        $howApply->long_desc = $request->long_desc;
        
        
        if ($request->hasFile('form_file')) {

            if ($howApply->form_file && file_exists(public_path($howApply->form_file))) {
                unlink(public_path($howApply->form_file));
    
            }
            $file = $request->file('form_file');
            $filename = time() .uniqid(). '.' . $file->getClientOriginalExtension();
            $file->move(public_path('backend/upload/how-apply/'), $filename);
            $howApply->form_file = 'backend/upload/how-apply/'. $filename;
            
        }
        

        $howApply->save();
        return redirect()->back()->with('success', 'Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
