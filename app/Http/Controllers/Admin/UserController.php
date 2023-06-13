<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datalist=User::all();
        return view('admin.user',['datalist'=>$datalist]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $datalist=User::all();
        return view('admin.user_add',['datalist'=>$datalist]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        // Yeni kullanıcı oluşturma
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);
        return redirect()->route('admin_users', ['id' => $user->id])->with('success', 'User created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user,$id)
    {
        $data=User::find($id);
        return view('admin.user_edit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $data,$id)
    {
        $data=User::find($id);
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->save();
        return redirect()->route('admin_users')->with('success','User Information Updates');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request,User $user,$id){

        $user=User::find($id);
        $user->roles()->detach();
        $user->delete();

        return redirect()->back()->with('success','User deleted');
    }




    public function user_role_delete(Request $request,User $user,$userid,$roleid){
        $user=User::find($userid);
        $user->roles()->detach($roleid);
        return redirect()->back()->with('success','Role deleted from user');
    }

    public function user_roles(User $user,$id){
        $data=User::find($id);
        $datalist =Role::all()->sortBy('name');
        return view('admin.user_roles',['data'=>$data,'datalist'=>$datalist]);
    }
    public function user_role_store(Request $request,User $user,$id){

        $user=User::find($id);
        $roleid =$request->input('roleid');
        $user->roles()->attach($roleid);
        return redirect()->back()->with('success','Role added to user');
    }
}
