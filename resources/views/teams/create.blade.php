@extends('teams.layout')
@section('content')

    <div class="card" style="margin:20px;">
        <div class="card-header">Создание новой темы</div>
        <div class="card-body">

            <form action="{{ url('teams') }}" method="post">
                {!! csrf_field() !!}
                <label>Название</label></br>
                <input type="text" name="name" id="name" class="form-control"></br>
                <label>Описание</label></br>
                <input type="text" name="description" id="description" class="form-control"></br>
                <input type="submit" value="Save" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@stop
