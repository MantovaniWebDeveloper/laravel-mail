<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailController extends Controller
{
    public function saveMail(Request $request){

      $data = $request->all();

      dd($data);
    }
}
