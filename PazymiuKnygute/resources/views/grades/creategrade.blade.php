@extends("layouts.app")

@section('content')
    <div class="container">

            <div class="panel-heading">
                <h3 class="panel-title text-info">Naujo įvertinimo pridėjimas</h3>
            </div>
            <hr class="bg-info">


        <form method="POST" action="{{ route('pazymiai.store') }}">
            {{ csrf_field() }}
            <table class="table table-hover">

                <tr class="bg-info">
                    <th>Studentas</th>
                    <th>Paskaita</th>
                    <th>Pažymys</th>
                    <th></th>
                </tr>


                <tr>
                    <td>
                        <select name="student_id">
                            <option>Pasirinkite studentą</option>
                            @foreach($allStudents as $studentItem)
                                <option value="{{ $studentItem->id }}">{{ $studentItem->name }}</option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                        <select name="lecture_id">
                            <option>Pasirinkite paskaitą</option>
                            @foreach($allLectures as $lectureItem)
                                <option value="{{ $lectureItem->id }}">{{ $lectureItem->name }}</option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                        <input name="grade"
                               required class="form-control">
                    </td>
                    <td>
                        <input type="submit" class="btn btn-info" value="Pridėti įrašą">
                    </td>

                </tr>

            </table>
        </form>
<!--

                <form method="POST" action="{{ route('pazymiai.store') }}">
                {{ csrf_field() }}

                <select name="student_id">
                    <option>Pasirinkite studentą</option>
                    @foreach($allStudents as $studentItem)
                        <option value="{{ $studentItem->id }}">{{ $studentItem->name }}</option>
                    @endforeach
                </select>

                <select name="lecture_id">
                    <option>Pasirinkite paskaitą</option>
                    @foreach($allLectures as $lectureItem)
                        <option value="{{ $lectureItem->id }}">{{ $lectureItem->name }}</option>
                    @endforeach
                </select>

                Pažymys:
                <input name="grade"
                       required class="form-control">

               <input type="submit" class="btn btn-info" value="Pridėti įrašą">

            </form>
-->


    </div>
@endsection