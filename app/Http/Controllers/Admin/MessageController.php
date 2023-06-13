<?php

namespace App\Http\Controllers\Admin;

use App\Models\Message;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Tests\Integration\Database\EloquentHasManyThroughTest\Category;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datalist=Message::all();

        return view('admin.messages',['datalist'=>$datalist]);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Message $message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Message $message,$id)
    {
        $data= Message::find($id);
        $data->status='Read';
        $data->save();

        return view('admin.messages_edit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Message $message,$id)
    {
       $data=Message::find($id);
       $data->note = $request->input('note');
       $data->save();
       return back()->with('success','Message Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Message $message,$id)
    {
        $data= Message::find($id);
        $data->delete();

        return redirect()->route('admin_messages')->with('success','Message Deleted');
    }
}
