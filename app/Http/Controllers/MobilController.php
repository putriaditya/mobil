<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MobilController extends Controller
{
    public function destroy($id)
    {
        DB::table('mobil')->where('id',$id)->delete();
            
        return redirect('/');
       
    }
}
