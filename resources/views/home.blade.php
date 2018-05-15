@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ Auth::user()->coach_team_name }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Coach ID: {{ Auth::user()->id }}<br>
                    First Name: {{ Auth::user()->coach_first_name }}<br>
                    Last Name: {{ Auth::user()->coach_last_name }}<br>
                    Username: {{ Auth::user()->coach_username }}<br>
                    Email: {{ Auth::user()->coach_email }}<br>
                    Phone Number: {{ Auth::user()->coach_phone }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
