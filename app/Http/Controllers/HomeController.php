<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Anno;
use App\Models\Blog;
use App\Models\Comment;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function index()
    {
        $an=Anno::all();
        $blog=Blog::all();
        return view('home.index',compact('an','blog'));
    }

    public function blog()
    {
        $blog = Blog::with('user')->get();
        $comments=Comment::with('user')->get();
        return view('layouts.blog',compact('blog','comments'));
    }

    public function msg()
    {
        $msg=Message::all();
        return view('layouts.msg',compact('msg'));
    }

    public function anno()
    {
        $an=Anno::all();
        return view('layouts.anno',compact('an'));
    }

    public function sendmsg(Request $request)
    {
        $email = Auth::user()->email;
        $data=new Message();
        $data->name = Auth::user()->name;
        $data->email = $email;
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->user_id=Auth::id();
        $data->save();
        return redirect(route('msg'))->with('success','Your message has been send succesfully.');
    }

    public function sendcmt(Request $request,Blog $id){
        $data=new Comment();
        $data->id=$request->input('id');
        $data->user_id=Auth::id();
        $data->review=$request->input('review');
        $data->blog_id=$request->input('blog_id');
        $data->ip=request()->ip();
        $data->save();
        return redirect()->route('blog')->with('success','Your comment has been sent, Thank You.');
    }

    public function test()
    {
        return view('admin.test');
    }



}
