<?php

namespace qaddition\Http\Controllers;

use Illuminate\Http\Request;

use qaddition\bukutamu;

class bukutamuController extends Controller
{
  public function index()
  {
      $messages=bukutamu::all();
      return view('bukutamu.index')->with('messages',$messages);
  }
  public function input()
  {
    return view('bukutamu.tamu');
  }
  public function save(Request $request){
    $input = new bukutamu();
      $input->email = $request->get('email');
      $input->message = $request->get('pesan');

      $input->save();

      return view('home2');
  }
}
