@extends('teams.layout')
@section('content')

    <div class="card" style="margin:20px;">
        <div class="card-header">Редактирование команды</div>
        <div class="card-body">

            <form action="{{ url('teams/' .$teams->id) }}" method="post">
                {!! csrf_field() !!}
                @method("PATCH")
                <input type="hidden" name="id" id="id" value="{{$teams->id}}" id="id"/>
                <label>Название</label></br>
                <input type="text" name="name" id="name" value="{{$teams->name}}" class="form-control"></br>
                <label>Описание</label></br>
                <input type="text" name="description" id="description" value="{{$teams->description}}" class="form-control"></br>
                <input type="submit" value="Update" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@stop
