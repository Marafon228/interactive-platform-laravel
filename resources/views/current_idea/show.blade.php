@extends('current_idea.layout')
@section('content')

    <div class="card" style="margin:20px;">
        <div class="card-header">Страница текущей идеи</div>
        <div class="card-body">
            <div class="card-body">
                <p class="card-title">Опыт участия в хакатонах (количество)
                    : {{ $current_idea->participation_experience_count }}</p>
                <p class="card-text">id капитан(выбрать) : {{ $current_idea->id_team_captain }}</p>
                <p class="card-text">Выбранная задача : {{ $current_idea->selected_task }}</p>
                <p class="card-text">Резюме : {{ $current_idea->summary }}</p>
            </div>
            </hr>
        </div>
    </div>
