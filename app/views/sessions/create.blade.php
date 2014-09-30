@extends('layouts.default_min')

@section('content')
    <div class="placeholder100">

    </div>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h3 class="underlined">Нэвтрэх хэсэг</h3>

            {{ Form::open(['route' => 'login_path']) }}
            <!-- Email form input -->
            <div class="form-group">
                {{ Form::label('email', 'И-мэйл:')}}
                {{ Form::email('email', null, ['class' => 'form-control', 'required' => 'required'])}}
            </div>

            <!-- Password form input -->
            <div class="form-group">
                {{ Form::label('password', 'Нууц үг:')}}
                {{ Form::password('password', ['class' => 'form-control', 'required' => 'required'])}}
            </div>

            <!-- Submit form input -->
            <div class="form-group">
                {{ Form::submit('Нэвтрэх', ['class' => 'btn btn-primary btnRed'])}}
            </div>

            {{ Form::close() }}
        </div>
    </div>

<!--    place holder-->
<div style="height: 500px; width: 100%"></div>
@stop