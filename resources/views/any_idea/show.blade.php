@extends('any_idea.layout')
@section('content')


    <div class="card" style="margin:20px;">
        <div class="card-header">any idea Page</div>
        <div class="card-body">
            <div class="card-body">
                <p class="card-title">Название : {{ $any_idea->name }}</p>
                <p class="card-text">Описание : {{ $any_idea->description }}</p>
                <p class="card-text">Ссылка на проект : {{ $any_idea->link_project }}</p>
                <p class="card-text">Презентация : {{ $any_idea->presentation }}</p>
                <p class="card-text">Опыт участия : {{ $any_idea->participation_experience }}</p>

            </div>
            <section class="comment-list mb-5">
                <h2>Комментарии</h2>
                @foreach($any_idea->comment as $comment)
                    <div class="comment-text mb-2">
                        <span class="username">
                            <div>
                                {{$comment->user->fio}}
                            </div>
                        </span>
                        <div>
                            {{$comment->message}}
                        </div>
                    </div>
                @endforeach
            </section>

                <section>
                    <h2>Отправить комментарий</h2>
                    <form action="{{route('store', $any_idea->id)}}" method="post">
                        @csrf
                        <div class="row">
                            <div>
                                <label for="comment"></label>
                                <textarea name="message" id="comment" placeholder="Напиши комментарий!" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12" data-aos="fade-up">
                                <input type="submit" value="Добавить">
                            </div>
                        </div>
                    </form>
                </section>

        </div>
    </div>
