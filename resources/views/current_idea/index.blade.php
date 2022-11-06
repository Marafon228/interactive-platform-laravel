@extends('current_idea.layout')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Административная панель</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/current_idea/create') }}" class="btn btn-success btn-sm" title="Add New current_idea">
                            Добавить идею
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Опыт участия в хакатонах (количество)</th>
                                    <th>id капитан(выбрать)</th>
                                    <th>Выбранная задача</th>
                                    <th>Резюме</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($current_idea as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->participation_experience_count }}</td>
                                        <td>{{ $item->id_team_captain }}</td>
                                        <td>{{ $item->selected_task }}</td>
                                        <td>{{ $item->summary }}</td>
                                        <td>
                                            <a href="{{ url('/current_idea/' . $item->id) }}" title="View Student">
                                                <button class="btn btn-info btn-sm"><i class="fa fa-eye"
                                                                                       aria-hidden="true"></i> View
                                                </button>
                                            </a>
                                            <a href="{{ url('/current_idea/' . $item->id . '/edit') }}"
                                               title="Edit Student">
                                                <button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"
                                                                                          aria-hidden="true"></i> Edit
                                                </button>
                                            </a>

                                            <form method="POST" action="{{ url('/current_idea' . '/' . $item->id) }}"
                                                  accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                        title="Delete Student"
                                                        onclick="return confirm(&quot;Точно удалить?&quot;)"><i
                                                        class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                                </button>
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
