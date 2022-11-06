@extends('teams.layout')
@section('content')
    <div class="card" style="margin:20px;">
        <div class="card-header">Страница команды</div>
        <div class="card-body">
            <div class="card-body">
                <p class="card-title">Название : {{ $teams->name }}</p>
                <p class="card-text">Описание : {{ $teams->description }}</p>
                <input type="submit" value="Вступить в команду" class="btn btn-success"></br>
            </div>
        </div>
    </div>
