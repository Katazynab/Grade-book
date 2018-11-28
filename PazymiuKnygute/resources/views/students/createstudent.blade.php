@extends("layouts.app")

@section('content')
    <div class="container">

        <div class="col-sm-8">
            <h1>Naujas studentas</h1>

            <form method="POST" action="{{ route('studentai.store') }}">
                {{ csrf_field() }}

                Studento vardas:
                <input name="name"
                       required class="form-control">
                Pavardė:
                <input name="surname"
                       required class="form-control">
                Elektroninis paštas:
                <input name="email"
                       required class="form-control">
                Telefono numeris:
                <input name="phone"
                       required class="form-control">

                <input type="submit" class="btn btn-info" value="Pridėti studentą">
            </form>

        </div>

    </div>
@endsection