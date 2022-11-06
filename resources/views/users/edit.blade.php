@extends('users.layout')
@section('content')

    <div class="card" style="margin:20px;">
        <div class="card-header">Редактирование пользователя</div>
        <div class="card-body">

            <form action="{{ url('users/' .$users->id) }}" method="post">
                {!! csrf_field() !!}
                @method("PATCH")
                <input type="hidden" name="id" id="id" value="{{$users->id}}" id="id"/>
                <label>ФИО</label></br>
                <input type="text" name="fio" id="fio" value="{{$users->fio}}" class="form-control"></br>
                <label>Дата рождения</label></br>
                <input type="text" name="date_of_birth" id="date_of_birth" value="{{$users->date_of_birth}}" class="form-control"></br>
                <label>Страна</label></br>
                <input type="text" name="country" id="country" value="{{$users->country}}" class="form-control"></br>
                <label>Город</label></br>
                <input type="text" name="city" id="city" value="{{$users->city}}" class="form-control"></br>
                <label>Гражданство</label></br>
                <input type="text" name="citizenship" id="citizenship" value="{{$users->citizenship}}" class="form-control"></br>
                <label>Пол</label></br>
                <input type="text" name="gender" id="gender" value="{{$users->gender}}" class="form-control"></br>
                <label>Телефон</label></br>
                <input type="text" name="phone" id="phone" value="{{$users->phone}}" class="form-control"></br>
                <label>Email</label></br>
                <input type="text" name="email" id="email" value="{{$users->email}}" class="form-control"></br>
                <label>Образование</label></br>
                <input type="text" name="education" id="education" value="{{$users->education}}" class="form-control"></br>
                <label>Работа</label></br>
                <input type="text" name="employment" id="employment" value="{{$users->employment}}" class="form-control"></br>
                <label>Опыт работы</label></br>
                <input type="text" name="work_experience" id="work_experience" value="{{$users->work_experience}}" class="form-control"></br>
                <label>Навыки</label></br>
                <input type="text" name="skills" id="skills" value="{{$users->skills}}" class="form-control"></br>
                <label>Достижения</label></br>
                <input type="text" name="achievements" id="achievements" value="{{$users->achievements}}" class="form-control"></br>
                <label>Наличие команды</label></br>
                <input type="text" name="presence_team" id="presence_team" value="{{$users->presence_team}}" class="form-control"></br>
                <label>Роль в команде</label></br>
                <input type="text" name="role_team" id="role_team" value="{{$users->role_team}}" class="form-control"></br>
                <label>Патенты</label></br>
                <input type="text" name="patent" id="patent" value="{{$users->patent}}" class="form-control"></br>
                <label>Компания</label></br>
                <input type="text" name="company" id="company" value="{{$users->company}}" class="form-control"></br>
                <label>Пароль</label></br>
                <input type="text" name="password" id="password" value="{{$users->password}}" class="form-control"></br>
                <input type="submit" value="Update" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@stop
