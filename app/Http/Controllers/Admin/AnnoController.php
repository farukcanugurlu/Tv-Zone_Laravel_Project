<?php

namespace App\Http\Controllers\Admin;

use App\Http\Middleware\Authenticate;
use App\Models\Anno;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PHPUnit\Metadata\Parser\AnnotationParser;

class AnnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datalist=Anno::all();
        return view('admin.anno',['datalist'=>$datalist]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $datalist=Anno::all();
        return view('admin.anno_add',['datalist'=>$datalist]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=new Anno;
        $data->id=$request->input('id');
        $data->title=$request->input('title');
        $data->detail=$request->input('detail');
        $data->user_id=Auth::id();
        $data->save();
        return redirect()->route('admin_annos');
    }

    /**
     * Display the specified resource.
     */
    public function show(Anno $anno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Anno $anno,$id)
    {
        $data = Anno::find($id);
        $datalist=Anno::all();

        return view('admin.anno_edit',['data'=>$data,'datalist'=>$datalist]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Anno $anno,$id)
    {
        $data=Anno::find($id);
        $data->title=$request->input('title');
        $data->detail=$request->input('detail');
        $data->user_id=Auth::id();
        $data->save();
        return redirect()->route('admin_annos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Anno $anno,$id)
    {
        $data=Anno::find($id);

        $data->delete();

        return redirect()->route('admin_annos');
    }
}
