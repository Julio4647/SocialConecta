<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function index()
    {
        $users = DB::select('select * from users');

        foreach ($users as $user) {
            echo $user->name;
        }

        $admins = DB::select('select * from admins');
        foreach ($admins as $admin) {
            echo $admin->name;
        }
    }

    public function register()
    {
        return view('auth/register');
    }

    public function registerSave(Request $request)
    {
        Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ])->validate();


        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'last_name' => $request->last_name,
            'password' => Hash::make($request->password),
            'level' => 'Admin'
        ]);

        Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'last_name' => $request->last_name,
            'password' => Hash::make($request->password),
            'level' => 'Admin'
        ]);




        return redirect()->route('login');
    }

    public function login()
    {
        return view('auth.login');
    }


    protected function guard()
    {

        return Auth::guard('admin');
    }



    public function loginAction(Request $request)
    {


        $user = User::where('email', $request->email)->first();
        $admin = Admin::where('email', $request->email)->first();

        if ($user && Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // El usuario ha iniciado sesión exitosamente como usuario
            return redirect()->intended('/dashboard');
        } elseif ($admin && Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            // El usuario ha iniciado sesión exitosamente como administrador
            return redirect()->intended('/dashboard');
        } else {
            // Las credenciales de inicio de sesión son incorrectas
            return back()->withErrors(['email' => 'Credenciales incorrectas.'])->withInput($request->only('email'));
        }
    }

    public function resetPassword(Request $request)
    {
        return view('auth.resetPassword');
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        return redirect('/');
    }
}
