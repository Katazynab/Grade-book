@extends("layouts.app")

@section('content')
    <div class="container">

        <div class="panel-heading">
            <h3 class="panel-title text-info">Paskaitos</h3>
        </div>
        <hr class="bg-info">

        <table class="table table-hover">
            <tr class="bg-info">
                <th>Paskaita</th>
                <th>Aprašymas</th>
                <th>Redaguoti</th>
                <th>Ištrinti paskaitą</th>
            </tr>


            @foreach($lectures as $lectureItem)
                <tr>
                    <td>{{$lectureItem->name}}</td>
                    <td>{{$lectureItem->description}}</td>
                    <td>
                        <a class="btn btn-success" href="{{ route('paskaitos.edit', $lectureItem->id) }}">Taisyti</a>
                    </td>
                    <td>
                        <form action="{{ route('paskaitos.destroy', $lectureItem->id) }}"
                              method="POST">
                            {{ csrf_field() }}
                            <input class="btn btn-danger" type="submit" value="x">
                        </form>

                    </td>
                </tr>
            @endforeach
        </table>

        <a class="btn btn-info bg-info" href="{{ route('paskaitos.create') }}">Pridėti naują paskaitą</a>



    </div>
@endsection
