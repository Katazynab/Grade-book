@extends("layouts.app")

@section('content')
    <div class="container">
        <div class="col-sm-8 post ">

        <h1>Studento informacijos atnaujinimas</h1>

        <form method="POST" action="{{ route('studentai.update', $student->id) }}">
            {{ csrf_field() }}

            Studento vardas:
            <input name="name"
                   class="form-control" value="{{ $student->name }}">
            Pavardė:
            <input name="surname"
                   class="form-control" value="{{ $student->surname }}">
            Elektroninis paštas:
            <input name="email"
                   class="form-control" value="{{ $student->email }}">
            Telefono numeris:
            <input name="phone"
                  class="form-control" value="{{ $student->phone }}">

            <hr>
            <input type="submit" class="btn btn-info" value="Išsaugoti pakeitimus">
        </form>
        </div>
    </div>
@endsection