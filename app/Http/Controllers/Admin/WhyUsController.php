<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\WhyUs;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class WhyUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        if (request()->ajax()) {
            $faqs = WhyUs::all();
            return   DataTables::of($faqs)
                ->addColumn('status', function ($faq) {

//                if(Auth::guard('admin')->user()->can('Status Admin')) {
                    if ($faq->status == 1) {
                        return ' <a class="status" id="adminStatus" href="javascript:void(0)"
                                               data-id="'.$faq->id.'" data-status="'.$faq->status.'"> <i
                                                        class="fa-solid fa-toggle-on fa-2x"></i>
                                            </a>';
                    } else {

                        return '<a class="status" id="adminStatus" href="javascript:void(0)"
                                               data-id="'.$faq->id.'" data-status="'.$faq->status.'"> <i
                                                        class="fa-solid fa-toggle-off fa-2x" style="color: grey"></i>
                                            </a>';

                    }
//                }

                })

                ->addColumn('action', function ($faq) {

                    $editAction = '<a class="editButton btn btn-sm btn-primary" href="javascript:void(0)"
                                  data-id="'.$faq->id.'" data-bs-toggle="modal" data-bs-target="#editAdminModal">
                                   <i class="fas fa-edit"></i></a>';
                    $deleteAction = '<a class="btn btn-sm btn-danger" href="javascript:void(0)"
                                   data-id="'.$faq->id.'" id="deleteAdminBtn""> 
                                   <i class="fas fa-trash"></i></a>';

                    return '<div class="d-flex gap-3"> '.$editAction.$deleteAction.'</div>';
                })
                ->addIndexColumn()
                ->rawColumns(['action', 'status', 'role'])
                ->make(true);
        }
        
        return view('backend.pages.website.why-us');
    }

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
            'title' => 'required|string',
            'description' => 'required|string',
        ]);

        $faq = new WhyUs();
        $faq->title = $request->title;
        $faq->description = $request->description;
        
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time().uniqid().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('backend/upload/why-us/'), $filename);
            $faq->image = 'backend/upload/why-us/'.$filename;
        }
        
        $faq->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Why Us created successfully'
        ], 200);
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
        $whyUs = WhyUs::find($id);
        return response()->json(['status' => 'success', 'data' => $whyUs], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'image' => 'nullable'
        ]);

        $faq = WhyUs::find($id);
        $faq->title = $request->title;
        $faq->description = $request->description;

        if ($request->hasFile('image')) {
            
            if ($faq->image && file_exists(public_path($faq->image))) {
                unlink(public_path($faq->image));
            }
            
            $file = $request->file('image');
            $filename = time().uniqid().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('backend/upload/why-us/'), $filename);
            $faq->image = 'backend/upload/why-us/'.$filename;
        }

        $faq->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Why Us updated successfully'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $faq = WhyUs::find($id);
        $faq->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Why Us deleted successfully'
        ], 200);
    }

    public function changeStatus(Request $request)
    {
        $id = $request->id;
        $status = $request->status;

        if ($status == 1) {
            $stat = 0;
        } else {
            $stat = 1;
        }

        $page = WhyUs::findOrFail($id);
        $page->status = $stat;
        $page->save();

        return response()->json([
            'message' => 'success',
            'status' => $stat, 'id' => $id
        ]);
    }
}
