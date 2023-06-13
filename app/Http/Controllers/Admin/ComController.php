<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ComController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datalist=Comment::all();
        return view('admin.comment',['datalist'=>$datalist]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {

    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $data,$id)
    {
        $data = Comment::find($id);
        $datalist=Comment::all();

        return view('admin.comment_edit',['data'=>$data,'datalist'=>$datalist]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Comment $data,$id)
    {
        $data=Comment::find($id);
        $data->review=$request->input('review');
        $data->save();
        return redirect()->route('admin_comments');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $data,$id)
    {
        $data=Comment::find($id);

        $data->delete();

        return redirect()->route('admin_comments');
    }

}
