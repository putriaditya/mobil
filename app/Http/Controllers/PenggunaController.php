<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengguna;
use App\Http\Requests\PenggunaRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Hash;



class PenggunaController extends Controller
{
    public function index()
    {
        return view('registrasi');
    }
    
    public function store(PenggunaRequest $request)
    {
        $data = $request->input();
        $pengguna = new Pengguna([
            'nama' => ucwords($data['nama']),
            'alamat' => $data['alamat'],
            'telp' => $data['telp'],
            'sim' => $data['sim'],
            'password' => Hash::make($data['pass']),
        ]);
        try {
            $pengguna->save();
            return redirect('login')->with('status', 'Registrasi Berhasil, Silahkan Login');
        } catch (\Throwable $e) {
            return redirect()->back()->withErrors($e->getMessage());
        }
    }
    
}
