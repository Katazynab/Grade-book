@extends("layouts.app")

@section('content')
    <div class="container">

        <div class="panel-heading">
            <h3 class="panel-title text-info">Studentai</h3>
        </div>
        <hr class="bg-info">

        <table class="table table-hover">
            <tr class="bg-info">
                <th>Vardas</th>
                <th>Pavardė</th>
                <th>El. paštas</th>
                <th>Tel. nr.</th>
                <th>Įvertinimų peržiūra</th>
                <th>Redaguoti</th>
                <th>Ištrinti studentą</th>
            </tr>


            @foreach($students as $studentItem)
                <tr>
                    <td>{{$studentItem->name}}</td>
                    <td>{{$studentItem->surname}}</td>
                    <td>{{$studentItem->email}}</td>
                    <td>{{$studentItem->phone}}</td>
                    <td><a href="{{ route('pazymiai.show', $studentItem->id) }}">Peržiūrėti-></a></td>
                    <td>
                        <a class="btn btn-success" href="{{ route('studentai.edit', $studentItem->id) }}">Taisyti</a>
                    </td>
                    <td>
                        <form action="{{ route('studentai.destroy', $studentItem->id) }}"
                              method="POST">
                            {{ csrf_field() }}
                            <input class="btn btn-danger" type="submit" value="x">
                        </form>

                    </td>
                </tr>
        @endforeach
        </table>

        <a class="btn btn-info bg-info" href="{{ route('studentai.create') }}">Pridėti naują studentą</a>



    </div>
@endsection
