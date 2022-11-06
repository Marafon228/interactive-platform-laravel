@extends('users.layout')
@section('content')

    <div class="card" style="margin:20px;">
        <div class="card-header">Создание нового пользователя</div>
        <div class="card-body">

            <form action="{{ url('users') }}" method="post">
                {!! csrf_field() !!}
                <label>ФИО</label></br>
                <input type="text" name="fio" id="fio" class="form-control"></br>
                <label>Дата рождения</label></br>
                <input type="text" name="date_of_birth" id="date_of_birth" class="form-control"></br>
                <label>Страна</label></br>
                <input type="text" name="country" id="country" class="form-control"></br>
                <label>Город</label></br>
                <input type="text" name="city" id="city" class="form-control"></br>
                <label>Гражданство</label></br>
                <input type="text" name="citizenship" id="citizenship" class="form-control"></br>
                <label>Пол</label></br>
                <input type="text" name="gender" id="gender" class="form-control"></br>
                <label>Телефон</label></br>
                <input type="text" name="phone" id="phone" class="form-control"></br>
                <label>Email</label></br>
                <input type="text" name="email" id="email" class="form-control"></br>
                <label>Образование</label></br>
                <input type="text" name="education" id="education" class="form-control"></br>
                <label>Работа</label></br>
                <input type="text" name="employment" id="employment" class="form-control"></br>
                <label>Опыт работы</label></br>
                <input type="text" name="work_experience" id="work_experience" class="form-control"></br>
                <label>Навыки</label></br>
                <input type="text" name="skills" id="skills" class="form-control"></br>
                <label>Достижения</label></br>
                <input type="text" name="achievements" id="achievements" class="form-control"></br>
                <label>Наличие команды</label></br>
                <input type="text" name="presence_team" id="presence_team" class="form-control"></br>
                <label>Роль в команде</label></br>
                <input type="text" name="role_team" id="role_team" class="form-control"></br>
                <label>Патенты</label></br>
                <input type="text" name="patent" id="patent" class="form-control"></br>
                <label>Компания</label></br>
                <input type="text" name="company" id="company" class="form-control"></br>
                <label>Пароль</label></br>
                <input type="text" name="password" id="password" class="form-control"></br>
                <input type="submit" value="Save" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@stop
