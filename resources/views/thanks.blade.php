@extends('layouts.app')

@section('content')

<p>&nbsp;</p><p>&nbsp;</p>
<div class="row-fluid">
<p align="center"><img src="/imgs/mlcu.jpg" class="img-circle img-responsive" style="max-height:150px"/>  </p>
<h1 class="text-center" style="font-size:400%">Grazie!</h1>
</div>
<p>&nbsp;</p><p>&nbsp;</p>

<div class="container"> 
<div class="thumb">
  <h4>Ti ringraziamo per il tuo contributo.</h4>
  <p>
    Per concludere il tuo regalo, devi effettuare un bonifico della cifra di {{$donation->amount}} € al seguente iban:
  </p>
  <h4 class"text-center">BE1234567890</h4>
</div>
</div>

@endsection