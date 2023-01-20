<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PanelController extends Controller
{
    public function show (){
        $ads = DB::table('ads')
        ->where('user_id',Auth::user()->id)
        ->get();
    //dd($ads);
        return view('panel.show',compact('ads'));
    }
}
