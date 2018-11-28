@extends("layouts.app")

@section('content')

<!DOCTYPE html>
<head>
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
<script>
    tinymce.init({forced_root_block : "", force_br_newlines:true, force_p_newlines:false, selector:'textarea' });
</script>

</head>

    <div class="container">
        <div class="col-sm-8 post ">

            <h1>Paskaitos informacijos atnaujinimas</h1>

            <form method="POST" action="{{ route('paskaitos.update', $lecture->id) }}">
                {{ csrf_field() }}
                {{ method_field('PUT') }}


                Paskaitos pavadinimas:
                <input name="name"
                       class="form-control" value="{{ $lecture->name }}">
                Aprašymas:
<!--
                <input name="description"
                       class="form-control" value="{{ $lecture->description }}">
-->
                <textarea name="description" class="form-control">{{ $lecture->description }}</textarea>

                <hr>
                <input type="submit" class="btn btn-info" value="Išsaugoti pakeitimus">
            </form>
        </div>
    </div>

@endsection