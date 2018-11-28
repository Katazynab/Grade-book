@extends("layouts.app")

@section('content')
    <div class="container">

        <div class="panel-heading">
            <h3 class="panel-title text-info">{{$student->name}} {{$student->surname}}</h3>
        </div>
        <hr class="bg-info">

        <table class="table table-hover" id="dev-table">
                <tr class="bg-info">
                    <th class="text-white">Paskaita</th>
                    <th class="text-white">Pažymys</th>
                </tr>

            @foreach($student->grades as $grade)
                <tr>
                    <td>
                        {{ $grade->lectures->name }}
                    </td>
                    <td>
                        {{ $grade->grade }}
                    </td>
                </tr>
            @endforeach
        </table>




    </div>
@endsection
