@extends('layouts.app')

@section('content')
<style>        h6 {
            font-size:140%;
            font-family: 'Pinyon Script', cursive;
            text-shadow: 2px 2px 4px #000000;
            color: #fff;
        }</style>


<p>&nbsp;</p><p>&nbsp;</p>
<div class="row-fluid">
<p align="center"><img src="/imgs/mlcu3.jpg" class="img-circle img-responsive" style="max-height:150px"/></p>
<h1 class="col-sm-6 text-center" style="font-size:400%">Come funziona</h1><h1 class="col-sm-6 text-center" style="font-size:400%">How it works</h1>
</div>
<p>&nbsp;</p><p>&nbsp;</p>

<div class="container thumb"> 
  <div class="col-sm-5">
<br/>
<p>
In questo sito trovi alcune cose che avremmo piacere di ricevere per il nostro matrimonio e che ci aiuteranno a ricordare tutti gli amici e i parenti che ci sono stati vicini in questo giorno speciale.
</p><p>Tramite questo sito potrai scegliere cosa desideri offrirci. Dopo aver effettuato la tua scelta, potrai versarci l’ammontare corrispondente tramite bonifico bancario. Ci occuperemo noi di acquistarlo e farcelo recapitare a Bruxelles.
</p>
<p>Ecco come funziona: tra le idee proposte puoi scegliere di regalarci un oggetto (le finestre contraddistinte da “Regalo”) oppure di contribuire a un acquisto più importante (le finestre contraddistinte da “Contributo”).
</p><p>Per i regali, l’ammontare è il costo totale dell’oggetto. Per i contributi, puoi scegliere tu quanto versare.
</p>
<p>
Se scegli un regalo:
<ol>
<li>Clicca sul pulsante <b>“Regalo”</b> sotto la foto e la descrizione del regalo</li>
<li>Inserisci i tuoi dati personali</li>
<li>Clicca su <b>“Invia”</b></li>
<li>Hai prenotato il tuo regalo. Sullo schermo troverai le coordinate per versare l’ammontare del regalo sul nostro conto tramite bonifico bancario. Riceverai anche un’e-mail con le stesse informazioni.</li>
</ol>
</p>
<p>
Se scegli di contribuire a un acquisto più importante:
<ol>
<li>Clicca sul pulsante <b>“Contributo”</b> sotto la foto e la descrizione dell’elemento scelto</li>
<li>Indica quanto vuoi offrire e inserisci i tuoi dati personali</li>
<li>Clicca su <b>“Invia”</b></li>
<li>Fatto. Sullo schermo troverai le coordinate per versare l’ammontare del tuo contributo sul nostro conto tramite bonifico bancario. Riceverai anche un’e-mail con le stesse informazioni.</li>
</ol>
<br/>
Se hai domande o hai bisogno di assistenza, <a href="{{ url('/contact') }}">contattaci</a>.
</p>
<p>
Un grazie di cuore a tutti voi per il vostro sostegno e l’energia che ci date!
<br/><br/><br/>
<h6>Carlo Umberto e Maria Luisa</h6>
</p>
  </div>
<div class="col-sm-1">&nbsp;</div>
  <div class="col-sm-5">
<br/>
<p>
In this website you will find some items that we would be pleased to receive for our marriage and that will help us remember all the friends and relatives who accompanied us in this special day.
</p><p>Through the main page you can reserve what you'd like to offer us. Once you have reserved, you can send us the corresponding amount through bank transfer. We will take care to buy the item and have it sent to us in Brussels.
</p><p>Here's how it works: you can either choose to give us a present (the items with “Regalo”) or to contribute to a bigger purchase (the items with “Contributo”).
</p><p>For the presents, the amount is fixed, and it is the full price of the object. For contributions, you can choose how much you want to offer.
</p><p>
How to book a present (Regalo):
<ol>
<li>Click on <b>“Regalo”</b> under the picture and description of the item</li>
<li>Insert your personal data</li>
<li>Click on <b>“Invia”</b> (= send)</li>
<li>You have booked your present. On the screen you will find the details to make your bank transfer. You will also receive an e-mail with the same details.</li>
</ol>
</p>
<p>
If you choose to contribute to a bigger purchase:
<ol>
<li>Click on <b>“Contributo”</b> (= contribution) under the picture and description of the item</li>
<li>Insert the amount you'd like to offer together with your personal data</li>
<li>Click on <b>“Invia”</b> (= send)</li>
<li>That's it. On the following screen you'll find the details to make your bank transfer. You will also receive an e-mail with the same details.</li>
</ol>
<br/>
Should you have questions or need assistance, <a href="{{ url('/contact') }}">contact us</a>.
</p>
<p>
A big thank you for your support and the energy you give us!
<br/><br/><br/>
<h6>Carlo Umberto and Maria Luisa</h6>
</p>


  </div>

</div>
<br/>
<br/>

@endsection