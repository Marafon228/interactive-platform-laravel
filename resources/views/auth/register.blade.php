@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Регистрация') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="fio" class="col-md-4 col-form-label text-md-end">{{ __('ФИО') }}</label>

                            <div class="col-md-6">
                                <input id="fio" type="text" class="form-control @error('fio') is-invalid @enderror" name="fio" value="{{ old('fio') }}" required autocomplete="fio" autofocus>

                                @error('fio')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="date_of_birth" class="col-md-4 col-form-label text-md-end">{{ __('Дата Рождения') }}</label>

                            <div class="col-md-6">
                                <input id="date_of_birth" type="text" class="form-control @error('date_of_birth') is-invalid @enderror" name="date_of_birth" value="{{ old('date_of_birth') }}" required autocomplete="date_of_birth" autofocus>

                                @error('date_of_birth')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="country" class="col-md-4 col-form-label text-md-end">{{ __('Страна') }}</label>

                            <div class="col-md-6">
                                <input id="country" type="text" class="form-control @error('country') is-invalid @enderror" name="country" value="{{ old('country') }}" required autocomplete="country">

                                @error('country')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="city" class="col-md-4 col-form-label text-md-end">{{ __('Город') }}</label>

                            <div class="col-md-6">
                                <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" required autocomplete="city">

                                @error('city')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="citizenship" class="col-md-4 col-form-label text-md-end">{{ __('Гражданство') }}</label>

                            <div class="col-md-6">
                                <input id="citizenship" type="text" class="form-control @error('citizenship') is-invalid @enderror" name="citizenship" value="{{ old('citizenship') }}" required autocomplete="citizenship">

                                @error('citizenship')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="gender" class="col-md-4 col-form-label text-md-end">{{ __('Пол') }}</label>

                            <div class="col-md-6">
                                <input id="gender" type="text" class="form-control @error('gender') is-invalid @enderror" name="gender" value="{{ old('gender') }}" required autocomplete="gender">

                                @error('gender')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('Телефон') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">

                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Пароль') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Повторить пароль') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="education" class="col-md-4 col-form-label text-md-end">{{ __('Образование') }}</label>

                            <div class="col-md-6">
                                <input id="education" type="text" class="form-control @error('education') is-invalid @enderror" name="education" value="{{ old('education') }}" required autocomplete="education">

                                @error('education')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="employment" class="col-md-4 col-form-label text-md-end">{{ __('Занятость') }}</label>

                            <div class="col-md-6">
                                <input id="employment" type="text" class="form-control @error('employment') is-invalid @enderror" name="employment" value="{{ old('employment') }}" required autocomplete="employment">

                                @error('employment')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="work_experience" class="col-md-4 col-form-label text-md-end">{{ __('Опыт работы (лет)') }}</label>

                            <div class="col-md-6">
                                <input id="work_experience" type="text" class="form-control @error('work_experience') is-invalid @enderror" name="work_experience" value="{{ old('work_experience') }}" required autocomplete="work_experience">

                                @error('work_experience')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="skills" class="col-md-4 col-form-label text-md-end">{{ __('Навыки') }}</label>

                            <div class="col-md-6">
                                <input id="skills" type="text" class="form-control @error('skills') is-invalid @enderror" name="skills" value="{{ old('skills') }}" required autocomplete="skills">

                                @error('skills')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="achievements" class="col-md-4 col-form-label text-md-end">{{ __('Достижения ') }}</label>

                            <div class="col-md-6">
                                <input id="achievements" type="text" class="form-control @error('achievements') is-invalid @enderror" name="achievements" value="{{ old('achievements') }}" required autocomplete="achievements">

                                @error('achievements')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="presence_team" class="col-md-4 col-form-label text-md-end">{{ __('Наличие команды') }}</label>

                            <div class="col-md-6">
                                <input id="presence_team" type="text" class="form-control @error('presence_team') is-invalid @enderror" name="presence_team" value="{{ old('presence_team') }}" required autocomplete="presence_team">

                                @error('presence_team')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="role_team" class="col-md-4 col-form-label text-md-end">{{ __('Роль в командк') }}</label>

                            <div class="col-md-6">
                                <input id="role_team" type="text" class="form-control @error('presence_team') is-invalid @enderror" name="role_team" value="{{ old('role_team') }}" required autocomplete="role_team">

                                @error('role_team')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="patent" class="col-md-4 col-form-label text-md-end">{{ __('Есть ли патент ?') }}</label>

                            <div class="col-md-6">
                                <input id="patent" type="text" class="form-control @error('patent') is-invalid @enderror" name="patent" value="{{ old('patent') }}" required autocomplete="patent">

                                @error('patent')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="company" class="col-md-4 col-form-label text-md-end">{{ __('Есть ли своя компания ?') }}</label>

                            <div class="col-md-6">
                                <input id="company" type="text" class="form-control @error('company') is-invalid @enderror" name="company" value="{{ old('company') }}" required autocomplete="company">

                                @error('company')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>




                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Зарегистрироваться') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
