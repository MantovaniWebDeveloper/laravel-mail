@extends('layouts.app')
@include('_partials.header')
@section('content')
<div class="wrapForm">
  <div class="container">

    @if (!empty ($avviso))
      <div class="alert alert-success pt-2" role="alert">
        <!--Recupero la variabile di avviso dal compact -->
        {{ $avviso }}
      </div>
    @endif

    <form class="" action="{{route('salvaMail')}}" method="post">
      @csrf
      @method('POST')
      <div class="form-group">
        <label for="exampleInputEmail1">Nome :</label>
        <input name="nome" type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Inserisci il tuo nome..">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Oggetto :</label>
        <input name="oggetto" type="text" class="form-control" aria-describedby="emailHelp" placeholder="Oggetto">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Testo :</label>
        <textarea class="form-control"name="testo" rows="8" cols="80"></textarea>
      </div>
      <input name="contenuto" class="btn btn-primary col-12"type="submit" name="" value="Invia">
    </form>
  </div>
</div>
@endsection
