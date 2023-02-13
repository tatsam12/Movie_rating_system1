<?php


namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;

class AdminController extends Controller
{
    // Dashboard
    public function index()
    {
        return view(('index'));
    }

    public function forgot_password()
    {
        return view(('forgot_password'));
    }


    public function login()
    {
        return view(('login'));
    }

    public function register()
    {
        return view(('register'));
    }

    public function store(Request $request)
    {

        //Validate
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect('/admin/login')->with('success', 'Registered successfully');
    }

    public function loginForm(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/admin');
        } else {
            return 'Insuccessful Login';
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/admin/login');
    }
}
