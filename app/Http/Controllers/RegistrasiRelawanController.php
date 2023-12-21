<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Relawan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegistrasiRelawanController extends Controller
{
    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'name' => 'required',
            'alamat' => 'required',
            'username' => 'required',
            'password' => 'required',
            'password_confirmation' => 'required | same:password',
            'email' => 'required',
            'notelp' => 'required',
            'tgllhr_relawan' => 'required',
            'jk_relawan' => 'required',
            'pekerjaan_relawan' => 'required',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);

        
        return redirect('detailevent/' . $request->input('kegiatan_id'))->with('Success', 'Selamat anda berhasil mendaftar');
    }
}
