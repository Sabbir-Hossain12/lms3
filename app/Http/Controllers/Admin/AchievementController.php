<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Achievement;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class AchievementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {

            $achievements = Achievement::all();

//        dd($admins);

            return   DataTables::of($achievements)
                ->addColumn('status', function ($achievement) {

//                if(Auth::guard('admin')->user()->can('Status Admin')) {
                    if ($achievement->status == 1) {
                        return ' <a class="status" id="adminStatus" href="javascript:void(0)"
                                               data-id="'.$achievement->id.'" data-status="'.$achievement->status.'"> <i
                                                        class="fa-solid fa-toggle-on fa-2x"></i>
                                            </a>';
                    } else {

                        return '<a class="status" id="adminStatus" href="javascript:void(0)"
                                               data-id="'.$achievement->id.'" data-status="'.$achievement->status.'"> <i
                                                        class="fa-solid fa-toggle-off fa-2x" style="color: grey"></i>
                                            </a>';

                    }
//                }
                })
                ->addColumn('action', function ($achievement) {

                    $editAction = '<a class="editButton btn btn-sm btn-primary" href="javascript:void(0)"
                                  data-id="'.$achievement->id.'" data-bs-toggle="modal" data-bs-target="#editAdminModal">
                                   <i class="fas fa-edit"></i></a>';
                    $deleteAction = '<a class="btn btn-sm btn-danger" href="javascript:void(0)"
                                   data-id="'.$achievement->id.'" id="deleteAdminBtn"">
                                   <i class="fas fa-trash"></i></a>';

//              if(Auth::guard('admin')->user()->can('Edit Admin')) {
//
//                  $editAction= '<a class="editButton btn btn-sm btn-primary" href="javascript:void(0)"
//                                    data-id="'.$admin->id.'" data-bs-toggle="modal" data-bs-target="#editAdminModal">
//                                    <i class="fas fa-edit"></i></a>';
//
//              }
//
//              if(Auth::guard('admin')->user()->can('Delete Admin')) {
//
//                  $deleteAction= '<a class="btn btn-sm btn-danger" href="javascript:void(0)"
//                                    data-id="'.$admin->id.'" id="deleteAdminBtn"">
//                                    <i class="fas fa-trash"></i></a>';
//
//              }

                    return '<div class="d-flex gap-3"> '.$editAction.$deleteAction.'</div>';


                })
                ->rawColumns(['action', 'status'])
                ->addIndexColumn()
                ->make(true);
        }

        return view('backend.pages.website.achievements');
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

            'title' => 'required|string',
            'count' => 'required|string',
        ]);

        $achievement = Achievement::create([
            'title' => $request->title,
            'count' => $request->count,
        ]);

        if ($achievement) {
            return response()->json([
                'status' => 'success',
                'message' => 'Achievement created successfully'
            ], 201);
        }

        return response()->json([
            'status' => 'failed',
            'message' => 'Something went wrong'
        ], 500);
    }

    /**
     * Display the specified resource.
     */
    public function show(Achievement $achievement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Achievement $achievement)
    {

        return response()->json([
            'status' => 'success',
            'message' => 'Achievement fetched successfully',
            'data' => $achievement
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Achievement $achievement)
    {
        $request->validate([

            'title' => 'required|string',
            'count' => 'required|string',
        ]);

        $achievement->update([
            'title' => $request->title,
            'count' => $request->count,
        ]);

            return response()->json([
                'status' => 'success',
                'message' => 'Achievement updated successfully'
            ], 201);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Achievement $achievement)
    {
        $achievement->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Achievement deleted successfully'
        ], 201);
    }

    public function changeAchievementStatus(Request $request)
    {
        $id = $request->id;
        $status = $request->status;

        if ($status == 1) {
            $stat = 0;
        } else {
            $stat = 1;
        }

        $page = Achievement::findOrFail($id);
        $page->status = $stat;
        $page->save();

        return response()->json([
            'message' => 'success',
            'status' => $stat, 'id' => $id
        ]);
    }
}
