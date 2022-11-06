@extends('science_idea.layout')
@section('content')

    <div class="card" style="margin:20px;">
        <div class="card-header">Страница научной идеи</div>
        <div class="card-body">
            <div class="card-body">
                <p class="card-title">ИНН (гражданина) : {{ $science_idea->inn }}</p>
                <p class="card-text">Адрес : {{ $science_idea->address }}</p>
                <p class="card-text">Номинация : {{ $science_idea->nomination }}</p>
                <p class="card-text">Направление : {{ $science_idea->direction }}</p>
                <p class="card-text">Выручка : {{ $science_idea->revenue }}</p>
                <p class="card-text">Стадия готовности проекта : {{ $science_idea->project_readiness_stage }}</p>
                <p class="card-text">Опыт участия в программах поддержки наукоемких проектов : {{ $science_idea->experience_participation }}</p>
                <p class="card-text">Название проекта : {{ $science_idea->name }}</p>
                <p class="card-text">Описание проекта : {{ $science_idea->description }}</p>
                <p class="card-text">Ссылка на проект : {{ $science_idea->link_project }}</p>
                <p class="card-text">Презентация : {{ $science_idea->presentation }}</p>
                <p class="card-text">Бизнес-план : {{ $science_idea->business_plan }}</p>
                <p class="card-text">Копии охранных документов : {{ $science_idea->copies_security_documents }}</p>
                <p class="card-text">Подтверждение уровня развития проекта : {{ $science_idea->confirmation_project_development }}</p>
                <p class="card-text">Фото/видео, подтверждающие работоспособность и/или характеристики проекта : {{ $science_idea->media_file }}</p>
            </div>
            </hr>
        </div>
    </div>
