<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\lead;

class MailController extends Controller
{
    public function saveMail(Request $request){

      $dataMail = $request->all();

      //dd($dataMAil);

      $newLead = new Lead();
      //assegno i valori
      $newLead->nome= $dataMail['nome'];
      $newLead->oggetto= $dataMail['oggetto'];
      $newLead->contenuto= $dataMail['contenuto'];

//      dd($newLead);
      //salvo nella tabella leads
      $newLead->save();

      return "Complimenti la mail è stata inviata con successo";
    }
}
