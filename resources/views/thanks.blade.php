@extends('layouts.app')

@section('content')

<p>&nbsp;</p>
<div class="row-fluid">
<h1 class="text-center" style="font-size:400%">Grazie!</h1>
</div>
<p>&nbsp;</p>

<div class="container"> 
<div class="thumb text-center">
  <h3>Grazie mille, {{$donation->donor}}!</h3>
  <p>Il tuo contributo è di {{$donation->amount}} € per il seguente regalo:</p>
  <img src="/imgs/{{$donation->gift->photo}}" class="img-thumbnail img-responsive" style="max-height:100px"/>
  <h4>{{$donation->gift->name}}</h4>

  <div class = "col-sm-2">&nbsp;</div>
  <div class = "col-sm-8 iban">
    <div class = "row">
    <div class="col-sm-6">Ammontare:</div>
    <div class="col-sm-6">{{$donation->amount}} €</div>
    </div>    
    <div class = "row">
    <div class="col-sm-6">IBAN:</div>
    <div class="col-sm-6">BE60733056254370</div>
    </div>
    <div class = "row">
    <div class="col-sm-6">BIC/SWIFT:</div>
    <div class="col-sm-6">KREDBEBB</div>
    </div>    
    <div class = "row">
    <div class="col-sm-6">Intestatario:</div>
    <div class="col-sm-6">Maria Luisa Francesca Libardi</div>
    </div>        
    <div class = "row">
    <div class="col-sm-6">Comunicazione:</div>
    <div class="col-sm-6">Lista Nozze - {{$donation->gift->name}}</div>
    </div>            
  </div>
  <div class = "col-sm-2">&nbsp;</div>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <br/>
  <p>Una mail ti è appena stata inviata a {{$donation->email}} con questi dati. Se non dovessi trovarla, cercala nella cartella "Posta Indesiderata".
  </p>
  <p>Hai ulteriori dubbi? Hai sbagliato da qualche parte e vorresti correggere?</p>
  <p>
    <a class="btn btn-default" href="/public/contact">Contatta gli sposi!</a>
  </p>
</div>
</div>
<br/>
@endsection