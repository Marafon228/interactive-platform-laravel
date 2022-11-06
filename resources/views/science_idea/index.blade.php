@extends('science_idea.layout')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Административная панель</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/science_idea/create') }}" class="btn btn-success btn-sm" title="Add New science idea">
                            Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>ИНН (гражданина)</th>
                                    <th>Адрес</th>
                                    <th>Номинация</th>
                                    <th>Направление</th>
                                    <th>Выручка</th>
                                    <th>Стадия готовности проекта</th>
                                    <th>Опыт участия в программах поддержки наукоемких проектов</th>
                                    <th>Название проекта</th>
                                    <th>Описание проекта</th>
                                    <th>Ссылка на проект</th>
                                    <th>Презентация</th>
                                    <th>Бизнес-план</th>
                                    <th>Копии охранных документов</th>
                                    <th>Подтверждение уровня развития проекта</th>
                                    <th>Фото/видео, подтверждающие работоспособность и/или характеристики проекта</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($science_idea as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->inn }}</td>
                                        <td>{{ $item->address }}</td>
                                        <td>{{ $item->nomination }}</td>
                                        <td>{{ $item->direction }}</td>
                                        <td>{{ $item->revenue }}</td>
                                        <td>{{ $item->project_readiness_stage }}</td>
                                        <td>{{ $item->experience_participation }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->description }}</td>
                                        <td>{{ $item->link_project }}</td>
                                        <td>{{ $item->presentation }}</td>
                                        <td>{{ $item->business_plan }}</td>
                                        <td>{{ $item->copies_security_documents }}</td>
                                        <td>{{ $item->confirmation_project_development }}</td>
                                        <td>{{ $item->media_file }}</td>
                                        <td>
                                            <a href="{{ url('/science_idea/' . $item->id) }}" title="View Student">
                                                <button class="btn btn-info btn-sm"><i class="fa fa-eye"
                                                                                       aria-hidden="true"></i> View
                                                </button>
                                            </a>
                                            <a href="{{ url('/science_idea/' . $item->id . '/edit') }}" title="Edit Student">
                                                <button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"
                                                                                          aria-hidden="true"></i> Edit
                                                </button>
                                            </a>

                                            <form method="POST" action="{{ url('/science_idea' . '/' . $item->id) }}"
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
