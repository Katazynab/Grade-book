@extends("layouts.app")

@section('content')
    <div class="container">

        <div class="panel-heading">
            <h3 class="panel-title text-info">Pažymių knygelė</h3>
        </div>
        <hr class="bg-info">
        <table class="table table-hover">
            <tr class="bg-info">
                <th>Studentas</th>
                <th>Paskaita</th>
                <th>Pažymys</th>
            </tr>
        </table>


        @foreach($grades as $gradeItem)
            <tr>
                <td>

                </td>
            </tr>

        @endforeach



    </div>
@endsection

