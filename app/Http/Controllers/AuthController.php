<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginsiswa(Request $request)
   {
    if(Auth::guard('siswa')->attempt([
        'nis'=> $request->nis,
        'password'=> $request->password
    ]))
    {
        dd('Berhasil: ' .  Auth::guard('siswa')->user());
        Log::info('Login successful');
        //return redirect('/user/dahsboard');
    }
        else{
            echo"Login Gagal";
            //return redirect('/user')->with('warning', 'nis / Password salah').
        }
    }
        public function logoutsiswa()
        {
           if(Auth::guard('siswa')->check()){
            Auth::guard('siswa')->logout();
            return redirect('/');
           }
        }

        public function loginguru(Request $request)
   {
    if(Auth::guard('guru')->attempt([
        'nik'=> $request->nik,
        'password'=> $request->password
    ]))
    {
        dd('Berhasil: ' .  Auth::guard('guru')->user());
        Log::info('Login successful');
        //return redirect('/user/dahsboard');
    }
        else{
            echo"Login Gagal";
            //return redirect('/user')->with('warning', 'nik / Password salah').
        }
    }
        public function logoutguru()
        {
           if(Auth::guard('guru')->check()){
            Auth::guard('guru')->logout();
            return redirect('/');
           }
        }

        public function loginadmin(Request $request)
    {
    if(Auth::guard('admin')->attempt([
        'username'=> $request->username,
        'password'=> $request->password
    ]))
    {
        dd('Berhasil: ' .  Auth::guard('admin')->user());
        Log::info('Login successful');
        //return redirect('/user/dahsboard');
    }
        else{
            echo"Login Gagal";
            //return redirect('/user')->with('warning', 'username / Password salah').
        }
    }
        public function logoutadmin()
        {
           if(Auth::guard('admin')->check()){
            Auth::guard('admin')->logout();
            return redirect('/');
           }
        }
}
