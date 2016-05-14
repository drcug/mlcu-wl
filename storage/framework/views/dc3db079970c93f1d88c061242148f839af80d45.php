<?php if(count($errors) > 0): ?>
 <script>$('#formModal').modal('show');</script>
    <!-- Form Error List -->
    <div class="alert alert-danger">
        <strong>Errore!</strong>

        <br><br>

        <ul>
            <?php foreach($errors->all() as $error): ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>