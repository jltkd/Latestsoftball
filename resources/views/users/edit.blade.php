@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <form method="post" action="{{route('users.update', $user)}}">
                    @csrf
                    {{ method_field('patch') }}
                    <div class="form-group row">
                        <label for="coach_team_name" class="col-md-4 col-form-label text-md-right">{{ __('Team Name') }}</label>

                        <div class="col-md-6">
                            <input id="coach_team_name" type="text" class="form-control{{ $errors->has('coach_team_name') ? ' is-invalid' : '' }}" name="coach_team_name" value="{{ $user->coach_team_name }}" autofocus>

                            @if ($errors->has('coach_team_name'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('coach_team_name') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="coach_first_name" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                        <div class="col-md-6">
                            <input id="coach_first_name" type="text" class="form-control{{ $errors->has('coach_first_name') ? ' is-invalid' : '' }}" name="coach_first_name" value="{{ $user->coach_first_name }}" autofocus>

                            @if ($errors->has('coach_first_name'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('coach_first_name') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="coach_last_name" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                        <div class="col-md-6">
                            <input id="coach_last_name" type="text" class="form-control{{ $errors->has('coach_last_name') ? ' is-invalid' : '' }}" name="coach_last_name" value="{{ $user->coach_last_name }}" autofocus>

                            @if ($errors->has('coach_last_name'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('coach_last_name') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="coach_username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                        <div class="col-md-6">
                            <input id="coach_username" type="text" class="form-control{{ $errors->has('coach_username') ? ' is-invalid' : '' }}" name="coach_username" value="{{ $user->coach_username }}" autofocus>

                            @if ($errors->has('coach_username'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('coach_username') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="coach_email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <input id="coach_email" type="email" class="form-control{{ $errors->has('coach_email') ? ' is-invalid' : '' }}" name="coach_email" value="{{ $user->coach_email }}">

                            @if ($errors->has('coach_email'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('coach_email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="coach_phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                        <div class="col-md-6">
                            <input id="coach_phone" type="tel" class="form-control{{ $errors->has('coach_phone') ? ' is-invalid' : '' }}" name="coach_phone" value="{{ $user->coach_phone }}">

                            @if ($errors->has('coach_phone'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('coach_phone') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password">

                            @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Update') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
