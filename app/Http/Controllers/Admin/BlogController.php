<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datalist=Blog::all();
        return view('admin.blog',['datalist'=>$datalist]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $datalist=Blog::all();
        return view('admin.blog_add',['datalist'=>$datalist]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=new Blog;
        $data->id=$request->input('id');
        $data->title=$request->input('title');
        $data->detail=$request->input('detail');
        if($request->file('image')){
            $data->image=$request->file('image')->store('images');
        }
        $data->user_id=Auth::id();
        $data->save();
        return redirect()->route('admin_blogs');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog,$id)
    {
        $data = Blog::find($id);
        $datalist=Blog::all();

        return view('admin.blog_edit',['data'=>$data,'datalist'=>$datalist]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog,$id)
    {
        $data=Blog::find($id);
        $data->title=$request->input('title');
        $data->detail=$request->input('detail');
        if($request->file('image')){
            $data->image=$request->file('image')->store('images');
        }
        $data->user_id=Auth::id();
        $data->save();
        return redirect()->route('admin_blogs');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog,$id)
    {
        $data=Blog::find($id);

        $data->delete();

        return redirect()->route('admin_blogs');
    }
}
