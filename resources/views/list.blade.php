@extends('layouts.app')

@section('content')

<div class="modal" tabindex="-1" id="formModal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
        <form action="{{ url('donation') }}" method="POST" class="form-horizontal">
                        {!! csrf_field() !!}
                        
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Donazione...</h4>
      </div>

      <div class="modal-body">
        @include('common.errors')
                <input type="hidden" name="gift_id" id="gift_id" id="donation-gift_id" class="form-control">
                <label for="donation-amount" class="col-sm-3 control-label">Contributo</label>
                <input type="number" name="amount" id="donation-amount" class="form-control" required>
                <label for="donation-donor" class="col-sm-3 control-label">Il tuo nome</label>
                <input type="text" name="donor" id="donation-donor" class="form-control" required>
                 <label for="donation-email" class="col-sm-3 control-label">La tua email</label>
                <input type="text" name="email" id="donation-email" class="form-control" required pattern=".+@.+\..{2,6}">
                <label for="donation-comment" class="col-sm-3 control-label">Commento</label>
                <textarea name="comment" id="donation-comment" class="form-control"> </textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Annulla</button>
        <button type="submit" class="btn btn-primary">Invia regalo</button>
      </div>
      </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<p>&nbsp;</p><p>&nbsp;</p>
<div class="row-fluid">
<p align="center"><img src="/imgs/mlcu.jpg" class="img-circle img-responsive" style="max-height:150px"/>  </p>
<h1 class="text-center" style="font-size:400%">Lista nozze Carlo Umberto e Maria Luisa</h1>
</div>
<p>&nbsp;</p><p>&nbsp;</p>
<!--- inizio accrocchio --->
<div class="container"> 
<div class="row">
  
@foreach ($gifts as $gift)
<div class="col-sm-4">
    <div class="text-center thumb">
<h4>{{$gift->name}}</h4>
<p align="center">
  <img src="/imgs/{{$gift->photo}}" class="img-thumbnail img-responsive" style="max-height:236px"/>
</p>
<p>
  {{$gift->desc}}
</p>

<?php

$donations = $gift->donations;
$total = 0;
foreach ($donations as $donation)
{
  $total += $donation->amount;
}
  $percentage = ( $total / $gift->price ) * 100;
  ?>
  <div class="progress progstatus">
    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="{{$total}}"
    aria-valuemin="0" aria-valuemax="{{$gift->price}}" style="width:{{$percentage}}%" >
    </div>
        {{($total)}} / {{$gift->price}} &euro;
    </div>

    <?php
    if ($total >= $gift->price)
    {
    ?>
    <button type="button" class="btn btn-primary btn-sm disabled">
      Questo oggetto è stato già offerto.
    </button>
    <?php
    }
    else
    {
      if ($gift->whole)
      {
?>
    <button type="button" class="btn btn-primary btn-sm fired gift" data-toggle="modal" data-id="{{$gift->id}}" data-max="{{($gift->price - $total)}}">
      Regalo
    </button>
<?php
      }
      else 
      {
    ?>
    <button type="button" class="btn btn-primary btn-sm fired contr" data-toggle="modal" data-id="{{$gift->id}}" data-max="{{($gift->price - $total)}}">
      Contributo
    </button>
    <?php
      }
    }
    ?>
    <p>&nbsp;</p>
</div>
    <p>&nbsp;</p>
    
</div>


<!--- fine accrocchio --->
@endforeach
</div>
</div>
<script>
$(window).bind("pageshow", function(event) {
if (event.originalEvent.persisted) {
location.reload();
}
});
      $(document).ready(function(){
       $(".contr").click(function(){
         $("#gift_id").val($(this).attr('data-id')); 
         $("#donation-amount").attr("max",$(this).attr('data-max')); 
         $("#donation-amount").removeAttr("disabled");
         $('#formModal').modal('show');
       });
        $(".gift").click(function(){
         $("#gift_id").val($(this).attr('data-id')); 
         $("#donation-amount").val($(this).attr('data-max')); 
         $("#donation-amount").attr("disabled", "disabled"); 
         $('#formModal').modal('show');
       });
    });
    
</script>

@endsection