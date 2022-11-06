@extends('current_idea.layout')
@section('content')

    <div class="card" style="margin:20px;">
        <div class="card-header">Create New current idea</div>
        <div class="card-body">

            <form action="{{ url('current_idea') }}" method="post">
                {!! csrf_field() !!}
                <label>Опыт участия в хакатонах (количество)</label></br>
                <input type="text" name="participation_experience_count" id="participation_experience_count" class="form-control"></br>
                <label>id капитан(выбрать)</label></br>
                <input type="text" name="id_team_captain" id="id_team_captain" class="form-control"></br>
                <label>Выбранная задача</label></br>
                <input type="text" name="selected_task" id="selected_task" class="form-control"></br>
                <label>Резюме</label></br>
                <input type="text" name="summary" id="summary" class="form-control"></br>
                <input type="submit" value="Save" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@stop
