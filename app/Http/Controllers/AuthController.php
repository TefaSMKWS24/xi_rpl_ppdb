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

}
