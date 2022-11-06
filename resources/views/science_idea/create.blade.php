@extends('science_idea.layout')
@section('content')

    <div class="card" style="margin:20px;">
        <div class="card-header">Создание новой новочной идеи</div>
        <div class="card-body">

            <form action="{{ url('science_idea') }}" method="post">
                {!! csrf_field() !!}
                <label>ИНН (гражданина)</label></br>
                <input type="text" name="inn" id="inn" class="form-control"></br>
                <label>Адрес</label></br>
                <input type="text" name="address" id="address" class="form-control"></br>
                <label>Номинация </label></br>
                <input type="text" name="nomination" id="nomination" class="form-control"></br>
                <label>Направление </label></br>
                <input type="text" name="direction" id="direction" class="form-control"></br>
                <label>Выручка </label></br>
                <input type="text" name="revenue" id="revenue" class="form-control"></br>
                <label>Стадия готовности проекта</label></br>
                <input type="text" name="project_readiness_stage" id="project_readiness_stage" class="form-control"></br>
                <label>Опыт участия в программах поддержки наукоемких проектов </label></br>
                <input type="text" name="experience_participation" id="experience_participation" class="form-control"></br>
                <label>Название проекта</label></br>
                <input type="text" name="name" id="name" class="form-control"></br>
                <label>Описание проекта</label></br>
                <input type="text" name="description" id="description" class="form-control"></br>
                <label>Ссылка на проект</label></br>
                <input type="text" name="link_project" id="link_project" class="form-control"></br>
                <label>Презентация </label></br>
                <input type="text" name="presentation" id="presentation" class="form-control"></br>
                <label>Бизнес-план</label></br>
                <input type="text" name="business_plan" id="business_plan" class="form-control"></br>
                <label>Копии охранных документов</label></br>
                <input type="text" name="copies_security_documents" id="copies_security_documents" class="form-control"></br>
                <label>Подтверждение уровня развития проекта </label></br>
                <input type="text" name="confirmation_project_development" id="confirmation_project_development" class="form-control"></br>
                <label>Фото/видео, подтверждающие работоспособность и/или характеристики проекта</label></br>
                <input type="text" name="media_file" id="media_file" class="form-control"></br>
                <input type="submit" value="Save" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@stop
