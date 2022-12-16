<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Termwind\Components\Dd;

class AdController extends Controller
{

public function __construct(){
    $this->middleware('auth');
}

public function create (){
    return view('ad.create');
}
}
