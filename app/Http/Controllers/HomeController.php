<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function redirect()
    {
        if (Auth::check()) {
            $mobil = DB::table('mobil')->get();
            return view('welcome',['mobil' => $mobil]);
        }
            

        return redirect('login');
    }

 
}
