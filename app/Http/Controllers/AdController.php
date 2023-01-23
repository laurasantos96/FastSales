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

public function destroy ($id){
    $ad = Ad::find($id);
    //dd($ad);
    $ad->delete();
    return redirect()->back()->withMessage(['type' => 'success', 'text' => 'Anuncio borrado']);
}
public function update ($id){
    $ad = Ad::find($id);
    //dd($ad);
    $ad->update();
    return redirect()->back()->withMessage(['type' => 'success', 'text' => 'Anuncio modificado']);
}

public function edit (Ad $ad){
   //dd($ad->image->getUrl(400,300));
    return view('ad.edit',compact('ad'));
}
}
