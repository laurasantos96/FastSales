<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Termwind\Components\Dd;
use App\Models\Ad;


class AdController extends Controller
{

public function __construct(){
    $this->middleware('auth');
}

public function create (){
    return view('ad.create');
}

public function show (Ad $ad){
    return view('ad.show',compact('ad'));
}

}
