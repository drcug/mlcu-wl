<?php $__env->startSection('content'); ?>

<div class="modal" tabindex="-1" id="formModal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
        <form action="<?php echo e(url('donation')); ?>" method="POST" class="form-horizontal">
                        <?php echo csrf_field(); ?>

                        
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">I tuoi dati</h4>
      </div>

      <div class="modal-body">
        <?php echo $__env->make('common.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
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
        <button type="submit" class="btn btn-primary">Invia</button>
      </div>
      </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<p>&nbsp;</p><p>&nbsp;</p>
<div class="row-fluid">
<p align="center"><img src="/imgs/mlcu.jpg" class="img-circle img-responsive" style="max-height:150px"/>  </p>
<h1 class="text-center" style="font-size:400%">Lista nozze di Carlo Umberto e Maria Luisa</h1>
</div>
<p>&nbsp;</p><p>&nbsp;</p>
<!--- inizio accrocchio --->
<div class="container"> 

<?php
 $count = 0;
?>

<?php foreach($gifts as $gift): ?>
<?php

 if ($count % 3 == 0) { echo "<div class=\"row\">"; }
?>
<div class="col-sm-4">
    <div class="text-center thumb">
<h4><?php echo e($gift->name); ?></h4>
<p align="center">
  <img src="/imgs/gifts/<?php echo e($gift->photo); ?>" class="img-thumbnail img-responsive" style="height:235px"/>
</p>
<p>
  <?php echo e($gift->desc); ?> 
  <?php if ($gift->url != "")
    {
  ?>
  <a href="<?php echo e($gift->url); ?>" target="_blank">Puoi vedere il regalo cliccando qui.</a>
  <?php
     }
  ?>
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
    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="<?php echo e($total); ?>"
    aria-valuemin="0" aria-valuemax="<?php echo e($gift->price); ?>" style="width:<?php echo e($percentage); ?>%" >
    </div>
        <?php echo e(($total)); ?> / <?php echo e($gift->price); ?> &euro;
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
    <button type="button" class="btn btn-primary btn-sm fired gift" data-toggle="modal" data-id="<?php echo e($gift->id); ?>" data-max="<?php echo e(($gift->price - $total)); ?>">
      Regalo
    </button>
<?php
      }
      else 
      {
    ?>
    <button type="button" class="btn btn-primary btn-sm fired contr" data-toggle="modal" data-id="<?php echo e($gift->id); ?>" data-max="<?php echo e(($gift->price - $total)); ?>">
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

<?php

 if ($count % 3 == 2) { echo "</div>"; }
 $count++;
?>
<!--- fine accrocchio --->
<?php endforeach; ?>
</div>
<div class="row">
    <div class="col-sm-2">&nbsp;</div>
    <div class="col-sm-8 thumb">Se non hai trovato un'idea che ti piace tra quelle proposte,
    torna a visitare il sito tra un po': aggiungeremo altre proposte prossimamente!</div>
    <div class="col-sm-2">&nbsp;</div>
</div>
<br/>
</div>
<script>
window.onpageshow = function(evt) {
    // If persisted then it is in the page cache, force a reload of the page.
    if (evt.persisted) {
        document.body.style.display = "none";
        location.reload();
    }
};

      $(document).ready(function(){
       $(".contr").click(function(){
         $("#gift_id").val($(this).attr('data-id')); 
         $("#donation-amount").attr("max",$(this).attr('data-max')); 
         $("#donation-amount").prop("readonly", false);
         $('#formModal').modal('show');
       });
        $(".gift").click(function(){
         $("#gift_id").val($(this).attr('data-id')); 
         $("#donation-amount").val( $(this).attr('data-max') ); 
         $("#donation-amount").prop("readonly", true); 
         $('#formModal').modal('show');
       });
    });
    
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>