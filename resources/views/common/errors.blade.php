@if (count($errors) > 0)
 <script>$('#formModal').modal('show');</script>
    <!-- Form Error List -->
    <div class="alert alert-danger">
        <strong>Errore!</strong>

        <br><br>

        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif