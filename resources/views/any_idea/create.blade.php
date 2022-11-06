@extends('any_idea.layout')
@section('content')

    <div class="card" style="margin:20px;">
        <div class="card-header">Создание новой идеи</div>
        <div class="card-body">

            <form action="{{ url('any_idea') }}" method="post">
                {!! csrf_field() !!}
                <label>Название</label></br>
                <input type="text" name="name" id="name" class="form-control"></br>
                <label>Описание</label></br>
                <input type="text" name="description" id="description" class="form-control"></br>
                <label>Ссылка на проект</label></br>
                <input type="text" name="link_project" id="link_project" class="form-control"></br>
                <label>Презентация</label></br>
                <input type="text" name="presentation" id="presentation" class="form-control"></br>
                <label>Опыт участия</label></br>
                <input type="text" name="participation_experience" id="participation_experience" class="form-control"></br>
                <input type="submit" value="Save" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@stop
