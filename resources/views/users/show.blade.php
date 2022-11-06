@extends('users.layout')
@section('content')

    <div class="card" style="margin:20px;">
        <div class="card-header">Страница пользователя</div>
        <div class="card-body">
            <div class="card-body">
                <p class="card-title">ФИО : {{ $users->fio }}</p>
                <p class="card-text">Дата рождения : {{ $users->date_of_birth }}</p>
                <p class="card-text">Страна : {{ $users->country }}</p>
                <p class="card-text">Город : {{ $users->city }}</p>
                <p class="card-text">Гражданство : {{ $users->citizenship }}</p>
                <p class="card-text">Пол : {{ $users->gender }}</p>
                <p class="card-text">Телефон : {{ $users->phone }}</p>
                <p class="card-text">Email : {{ $users->email }}</p>
                <p class="card-text">Образование : {{ $users->education }}</p>
                <p class="card-text">Работа : {{ $users->employment }}</p>
                <p class="card-text">Опыт работы : {{ $users->work_experience }}</p>
                <p class="card-text">Навыки : {{ $users->skills }}</p>
                <p class="card-text">Достижения : {{ $users->achievements }}</p>
                <p class="card-text">Наличие команды : {{ $users->presence_team }}</p>
                <p class="card-text">Роль в команде : {{ $users->role_team }}</p>
                <p class="card-text">Патенты : {{ $users->patent }}</p>
                <p class="card-text">Компания : {{ $users->company }}</p>
                <p class="card-text">Пароль : {{ $users->password }}</p>
            </div>
            </hr>
        </div>
    </div>
