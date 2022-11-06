@extends('any_idea.layout')
@section('content')

    <div class="card" style="margin:20px;">
        <div class="card-header">Edit Student</div>
        <div class="card-body">

            <form action="{{ url('any_idea/' .$any_idea->id) }}" method="post">
                {!! csrf_field() !!}
                @method("PATCH")
                <input type="hidden" name="id" id="id" value="{{$any_idea->id}}" id="id"/>
                <label>Название</label></br>
                <input type="text" name="name" id="name" value="{{$any_idea->name}}" class="form-control"></br>
                <label>Описание</label></br>
                <input type="text" name="description" id="description" value="{{$any_idea->description}}" class="form-control"></br>
                <label>Ссылка на проект</label></br>
                <input type="text" name="link_project" id="link_project" value="{{$any_idea->link_project}}" class="form-control"></br>
                <label>Презентация</label></br>
                <input type="text" name="presentation" id="presentation" value="{{$any_idea->presentation}}" class="form-control"></br>
                <label>Опыт участия</label></br>
                <input type="text" name="participation_experience" id="participation_experience" value="{{$any_idea->participation_experience}}" class="form-control"></br>
                <input type="submit" value="Update" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@stop
