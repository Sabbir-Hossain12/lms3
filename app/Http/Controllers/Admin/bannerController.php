<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class bannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $banners=Banner::first();
        return view('backend.pages.website.banner', compact('banners'));
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
        $request->validate([
           'image' => 'required', 
           'title' => 'required|string',
           'description' => 'required|string',
        ]);
        
        $banner = new Banner();
        $banner->title = $request->title;
        $banner->description = $request->description;
        
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time().uniqid().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('backend/upload/banners/'), $filename);
            $banner->image = 'backend/upload/banners/'.$filename;
        }
        $banner->save();
        
        return redirect()->back()->with('success', 'Banner created successfully.');
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
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
        ]);

        $banner = Banner::find($id);
        $banner->title = $request->title;
        $banner->description = $request->description;

        if ($request->hasFile('image')) {
            if ($banner->image && file_exists(public_path($banner->image))) {
                unlink(public_path($banner->image));
            }
            $file = $request->file('image');
            $filename = time().uniqid().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('backend/upload/banners/'), $filename);
            $banner->image = 'backend/upload/banners/'.$filename;
        }
        $banner->save();

        return redirect()->back()->with('success', 'Banner Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
