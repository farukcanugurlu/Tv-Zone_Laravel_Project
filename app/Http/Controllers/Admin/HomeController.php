<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function Webmozart\Assert\Tests\StaticAnalysis\validArrayKey;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function admin()
    {
        return view('admin.index');
    }

    public function loginform()
    {
        return view('admin.login');
    }

    public function logincheck(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            // Authentication successful
            return redirect()->intended('/');
        }

        // Authentication failed
        return redirect()->route('login')->with('error','You entered wrong try again');
    }

    public function registrationForm()
    {
        return view('admin.register');
    }

    public function register(Request $request,User $id)
    {
        // Validate the user's registration data
        $request->validate([
            'name' => 'required|',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|',
        ]);
        // Redirect the user to the desired location after successful registration
        $data=$request->all();
        $check=$this->create($data);
        return redirect()->route('login');
    }

    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }

    public function userlogout()
    {
        Auth::logout();
        return redirect()->route('home');
    }




}
