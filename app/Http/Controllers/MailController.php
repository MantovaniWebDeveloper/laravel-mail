<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\lead;
use App\Mail\SendNewLead;

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

      $avviso= "Complimenti, l'email è stata inviata con successo";
      //messaggio statico
      Mail::to('ratedsuperstar84@gmail.com')->send(new SendNewLead());

      return view("index",compact('avviso'));
    }
}
