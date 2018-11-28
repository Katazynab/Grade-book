@extends("layouts.app")

@section('content')
    <div class="container">

        <div class="col-sm-8">
            <h1>Nauja paskaita</h1>

            <form method="POST" action="{{ route('paskaitos.store') }}">
                {{ csrf_field() }}

                Paskaitos pavadinimas:
                <input name="name"
                       required class="form-control">
                Aprašymas:
                <input name="description"
                       required class="form-control">

                <input type="submit" class="btn btn-info" value="Pridėti paskaitą">
            </form>

        </div>

    </div>
@endsection