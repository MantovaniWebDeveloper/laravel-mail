@extends('layouts.app')
@include('_partials.header')
@section('content')
<div class="wrapForm">
  <div class="container">
    <form class="" action="index.html" method="post">
      <div class="form-group">
        <label for="exampleInputEmail1">Nome :</label>
        <input type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Inserisci il tuo nome..">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Oggetto :</label>
        <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Oggetto">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Testo :</label>
        <textarea class="form-control"name="testo" rows="8" cols="80"></textarea>
      </div>
      <input class="btn btn-primary col-12"type="submit" name="" value="Invia">
    </form>
  </div>
</div>
@endsection
