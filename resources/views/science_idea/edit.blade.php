@extends('science_idea.layout')
@section('content')

    <div class="card" style="margin:20px;">
        <div class="card-header">Edit Student</div>
        <div class="card-body">

            <form action="{{ url('science_idea/' .$science_idea->id) }}" method="post">
                {!! csrf_field() !!}
                @method("PATCH")
                <input type="hidden" name="id" id="id" value="{{$science_idea->id}}" id="id"/>
                <label>ИНН (гражданина)</label></br>
                <input type="text" name="inn" id="inn" value="{{$science_idea->inn}}" class="form-control"></br>
                <label>Адрес</label></br>
                <input type="text" name="address" id="address" value="{{$science_idea->address}}" class="form-control"></br>
                <label>Номинация </label></br>
                <input type="text" name="nomination" id="nomination" value="{{$science_idea->nomination}}" class="form-control"></br>
                <label>Направление </label></br>
                <input type="text" name="direction" id="direction" value="{{$science_idea->direction}}" class="form-control"></br>
                <label>Выручка </label></br>
                <input type="text" name="revenue" id="revenue" value="{{$science_idea->revenue}}" class="form-control"></br>
                <label>Стадия готовности проекта</label></br>
                <input type="text" name="project_readiness_stage" value="{{$science_idea->project_readiness_stage}}" id="project_readiness_stage" class="form-control"></br>
                <label>Опыт участия в программах поддержки наукоемких проектов </label></br>
                <input type="text" name="experience_participation" value="{{$science_idea->experience_participation}}" id="experience_participation" class="form-control"></br>
                <label>Название проекта</label></br>
                <input type="text" name="name" id="name" value="{{$science_idea->name}}" class="form-control"></br>
                <label>Описание проекта</label></br>
                <input type="text" name="description" value="{{$science_idea->description}}" id="description" class="form-control"></br>
                <label>Ссылка на проект</label></br>
                <input type="text" name="link_project" value="{{$science_idea->link_project}}" id="link_project" class="form-control"></br>
                <label>Презентация </label></br>
                <input type="text" name="presentation" value="{{$science_idea->presentation}}" id="presentation" class="form-control"></br>
                <label>Бизнес-план</label></br>
                <input type="text" name="business_plan" value="{{$science_idea->business_plan}}" id="business_plan" class="form-control"></br>
                <label>Копии охранных документов</label></br>
                <input type="text" name="copies_security_documents" value="{{$science_idea->copies_security_documents}}" id="copies_security_documents" class="form-control"></br>
                <label>Подтверждение уровня развития проекта </label></br>
                <input type="text" name="confirmation_project_development" value="{{$science_idea->confirmation_project_development}}" id="confirmation_project_development" class="form-control"></br>
                <label>Фото/видео, подтверждающие работоспособность и/или характеристики проекта</label></br>
                <input type="text" name="media_file" id="media_file" value="{{$science_idea->media_file}}" class="form-control"></br>
                <input type="submit" value="Update" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@stop
