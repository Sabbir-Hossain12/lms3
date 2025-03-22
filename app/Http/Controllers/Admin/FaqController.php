<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {
            $faqs = Faq::all();
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
        
        return view('backend.pages.website.faq');
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
            'question' => 'required|string',
            'answer' => 'required|string',
        ]);
        
        $faq = new Faq();
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->save();
        
        return response()->json([
            'status' => 'success',
            'message' => 'FAQ created successfully'
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
        $faq = Faq::find($id);
        return response()->json(['status' => 'success', 'data' => $faq], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'question' => 'required|string',
            'answer' => 'required|string',
        ]);
        
        $faq = Faq::find($id);
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->save();
        
        return response()->json([
            'status' => 'success',
            'message' => 'FAQ updated successfully'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $faq = Faq::find($id);
        $faq->delete();
        
        return response()->json([
            'status' => 'success',
            'message' => 'FAQ deleted successfully'
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

        $page = Faq::findOrFail($id);
        $page->status = $stat;
        $page->save();

        return response()->json([
            'message' => 'success',
            'status' => $stat, 'id' => $id
        ]);
    }
}
