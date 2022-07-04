<?php

namespace App\Http\Controllers;

use App\Models\Token;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // register
    public function registerView(Request $request): Factory|View|Application
    {
        return view('auth.register');
    }

    public function register(Request $request): RedirectResponse
    {
        $validate = $request->validate([
            'email' => 'required|string|email|unique:users|max:50',
            'role' => 'required|size:1',
            'password' => 'required|min:5|max:20',
            're-password' => 'required|min:5|max:20',
        ]);
        if ($request->get('password') != $request->get('re-password')){
            return redirect()
                ->route('registerView')
                ->with([
                    'status'=>'false',
                    'message' => 'Verifikasi Password Salah'
                ]);
        }
        if ($validate)  {
            $user = User::create([
                'email' => $validate['email'],
                'name' => "",
                'role' => $validate['role'],
                'password' => bcrypt($validate['password']),
            ]);
            event(new Registered($user));
            auth()->login($user);
            return redirect()
                ->route("landingpage")
                ->with([
                    'status'=>'true',
                    'message'=>'Pendaftaran berhasil, cek email anda untuk verifykasi akun.',
                ]);
        }
        return redirect()->route('registerView');
    }

    // login

    public function login(Request $request){
        $form_check = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5|max:20',
        ]);
        $user = User::where('email',$form_check['email'])->first();
        if($user){
            if (Auth::attempt($form_check, false)) {
                $request->session()->regenerate();
                return redirect()
                    ->route('dashboard.index');
            }
            return redirect()
                ->route('landingpage')
                ->with([
                    'status'=>'false',
                    'message'=>'Email atau Password anda salah'
                ]);
        }
        return redirect()
            ->route('landingpage')
            ->with([
                'status'=>'false',
                'message'=>'Akun Tidak Ditemukan'
            ]);
    }

    // logout
    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()
            ->route('landingpage');
    }
}
