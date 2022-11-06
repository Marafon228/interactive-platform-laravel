@extends('current_idea.layout')
@section('content')

    <div class="card" style="margin:20px;">
        <div class="card-header">Редактирование текущей идеи</div>
        <div class="card-body">

            <form action="{{ url('current_idea/' .$current_idea->id) }}" method="post">
                {!! csrf_field() !!}
                @method("PATCH")
                <input type="hidden" name="id" id="id" value="{{$current_idea->id}}" id="id"/>
                <label>Опыт участия в хакатонах (количество)</label></br>
                <input type="text" name="participation_experience_count" id="participation_experience_count"
                       value="{{$current_idea->participation_experience_count}}" class="form-control"></br>
                <label>id капитан(выбрать)</label></br>
                <input type="text" name="id_team_captain" id="id_team_captain"
                       value="{{$current_idea->id_team_captain}}" class="form-control"></br>
                <label>Выбранная задача</label></br>
                <input type="text" name="selected_task" id="selected_task" value="{{$current_idea->selected_task}}"
                       class="form-control"></br>
                <label>Резюме</label></br>
                <input type="text" name="summary" id="summary" value="{{$current_idea->summary}}"
                       class="form-control"></br>
                <input type="submit" value="Update" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@stop
