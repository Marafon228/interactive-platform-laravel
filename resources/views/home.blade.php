<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel 9 User Profile Update with Image profile upload using jquery ajax</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            Главная
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->fio }}
                        </a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>


        </div>
    </div>
</nav>
<div class="container mt-4">
    <div>
        <button>
            <a href="{{route('teams.index')}}">Команды</a>
        </button>
    </div>

    <form method="POST" enctype="multipart/form-data" id="profile_setup_frm" action="{{ route('update.profile') }}" >
        <div class="row">
            <div class="col-md-4 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    @php($profile_image = auth()->user()->profile_image)
                    <img class="rounded-circle mt-5" height="250" width="250" src="@if($profile_image == null) {{ asset("storage/profile_images/avatar.png") }}  @else {{ asset("storage/$profile_image") }} @endif" id="image_preview_container">
                    <span class="font-weight-bold">
                    <input type="file" name="profile_image" id="profile_image"  class="form-control">
                </span>
                </div>
            </div>
            <div class="col-md-8 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Настройки профиля</h4>
                    </div>
                    <div class="row" id="res"></div>
                    <div class="row mt-2">

                        <div class="col-md-6">
                            <label class="labels">ФИО</label>
                            <input type="text" name="fio" class="form-control" placeholder="fio" value="{{ auth()->user()->fio }}">
                        </div>
                        <div class="col-md-6">
                            <label class="labels">Email</label>
                            <input type="text" name="email" disabled class="form-control" value="{{ auth()->user()->email }}" placeholder="Email">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <label class="labels">Телефон</label>
                            <input type="text" name="phone" class="form-control" placeholder="Phone Number" value="{{ auth()->user()->phone }}">
                        </div>

                        <div class="col-md-6">
                            <label class="labels">Дата рождения</label>
                            <input type="text" name="date_of_birth" class="form-control" placeholder="др" value="{{ auth()->user()->date_of_birth }}">
                        </div>

                        <div class="col-md-6">
                            <label class="labels">Страна</label>
                            <input type="text" name="country" class="form-control" placeholder="Страна" value="{{ auth()->user()->country }}">
                        </div>

                        <div class="col-md-6">
                            <label class="labels">Город</label>
                            <input type="text" name="city" class="form-control" placeholder="город" value="{{ auth()->user()->city }}">
                        </div>

                        <div class="col-md-6">
                            <label class="labels">Гражданство</label>
                            <input type="text" name="citizenship" class="form-control" placeholder="гражданство" value="{{ auth()->user()->citizenship }}">
                        </div>


                        <div class="col-md-6">
                            <label class="labels">Пол</label>
                            <input type="text" name="gender" class="form-control" value="{{ auth()->user()->gender }}" placeholder="пол">
                        </div>

                        <div class="col-md-6">
                            <label class="labels">Образование</label>
                            <input type="text" name="education" class="form-control" value="{{ auth()->user()->education }}" placeholder="образование">
                        </div>

                        <div class="col-md-6">
                            <label class="labels">Занятость</label>
                            <input type="text" name="employment" class="form-control" value="{{ auth()->user()->employment }}" placeholder="занятость">
                        </div>

                        <div class="col-md-6">
                            <label class="labels">Опыт работы(лет)</label>
                            <input type="text" name="work_experience" class="form-control" value="{{ auth()->user()->work_experience }}" placeholder="опыт работы(лет)">
                        </div>

                        <div class="col-md-6">
                            <label class="labels">Навыки</label>
                            <input type="text" name="skills" class="form-control" value="{{ auth()->user()->skills }}" placeholder="навыки">
                        </div>

                        <div class="col-md-6">
                            <label class="labels">Доститжения</label>
                            <input type="text" name="achievements" class="form-control" value="{{ auth()->user()->achievements }}" placeholder="достижения">
                        </div>

                        <div class="col-md-6">
                            <label class="labels">Наличие команды</label>
                            <input type="text" name="presence_team" class="form-control" value="{{ auth()->user()->presence_team }}" placeholder="наличие команды">
                        </div>

                        <div class="col-md-6">
                            <label class="labels">Роль в команде</label>
                            <input type="text" name="role_team" class="form-control" value="{{ auth()->user()->role_team }}" placeholder="роль в команде">
                        </div>

                        <div class="col-md-6">
                            <label class="labels">Есть ли патент ?</label>
                            <input type="text" name="patent" class="form-control" value="{{ auth()->user()->patent }}" placeholder="патенты">
                        </div>

                        <div class="col-md-6">
                            <label class="labels">Есть ли своя компания</label>
                            <input type="text" name="company" class="form-control" value="{{ auth()->user()->company }}" placeholder="инн компании">
                        </div>
                    </div>

                    <div class="mt-5 text-center"><button id="btn" class="btn btn-primary profile-button" type="submit">Save Profile</button></div>
                </div>
            </div>

        </div>

    </form>
</div>


<script src="{{ asset('js/profileupdate.js') }}"></script>
</body>
</html>
