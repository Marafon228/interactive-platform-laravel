@extends('users.layout')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Административная панель</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/users/create') }}" class="btn btn-success btn-sm" title="Add New User">
                            Добавить нового пользователя
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>ФИО</th>
                                    <th>Дата рождения</th>
                                    <th>Страна</th>
                                    <th>Город</th>
                                    <th>Гражданство</th>
                                    <th>Пол</th>
                                    <th>Телефон</th>
                                    <th>Email</th>
                                    <th>Образование</th>
                                    <th>Работа</th>
                                    <th>Опыт работы</th>
                                    <th>Навыки</th>
                                    <th>Достижения</th>
                                    <th>Наличие команды</th>
                                    <th>Роль в команде</th>
                                    <th>Патенты</th>
                                    <th>Компания</th>
                                    <th>Пароль</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->fio }}</td>
                                        <td>{{ $item->date_of_birth }}</td>
                                        <td>{{ $item->country }}</td>
                                        <td>{{ $item->city }}</td>
                                        <td>{{ $item->citizenship }}</td>
                                        <td>{{ $item->gender }}</td>
                                        <td>{{ $item->phone }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->education }}</td>
                                        <td>{{ $item->employment }}</td>
                                        <td>{{ $item->work_experience }}</td>
                                        <td>{{ $item->skills }}</td>
                                        <td>{{ $item->achievements }}</td>
                                        <td>{{ $item->presence_team }}</td>
                                        <td>{{ $item->role_team }}</td>
                                        <td>{{ $item->patent }}</td>
                                        <td>{{ $item->company }}</td>
                                        <td>{{ $item->password }}</td>

                                        <td>
                                            <a href="{{ url('/users/' . $item->id) }}" title="View Student">
                                                <button class="btn btn-info btn-sm"><i class="fa fa-eye"
                                                                                       aria-hidden="true"></i> View
                                                </button>
                                            </a>
                                            <a href="{{ url('/users/' . $item->id . '/edit') }}" title="Edit Student">
                                                <button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"
                                                                                          aria-hidden="true"></i> Edit
                                                </button>
                                            </a>

                                            <form method="POST" action="{{ url('/users' . '/' . $item->id) }}"
                                                  accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                        title="Delete Student" onclick="return confirm(&quot;Точно удалить?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
