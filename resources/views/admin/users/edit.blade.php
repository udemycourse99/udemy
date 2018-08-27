<?php use App\photos; ?>

@extends ('layouts.admin')

@section('content')

    <h1>Edit User</h1>

    <div class="col-sm-3">

        <img src="{!! URL::asset($user->photo ? $user->photo->file : 'https://via.placeholder.com/350x150') !!}" alt="" class="img-responsive img-rounded">

    </div>

    <div class="col-sm-9">

    {!! Form::model($user, ['method'=>'PATCH', 'action' => ['AdminUsersController@update', $user->id], 'files'=>true])!!}

    <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name',NULL , ['class'=>'form-control'] ) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email', 'Email:') !!}
        {!! Form::email('email',NULL , ['class'=>'form-control'] ) !!}
    </div>

    <div class="form-group">
        {!! Form::label('role_id', 'Role:') !!}
        {!! Form::select('role_id',  $roles, null, ['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
        {!! Form::label('is_active', 'Status:') !!}
        {!! Form::select('is_active', array('1'=>'Active', '0'=>'Not Active'), null, ['class'=>'form-control'] ) !!}
    </div>

    <div class="form-group">
        {!! Form::label('password', 'Password:') !!}
        {!! Form::password('password', ['class'=>'form-control'] ) !!}
    </div>

    <div class="form-group">
        {!! Form::label('file', 'Image:') !!}
        {!! Form::file('photo_id', ['class'=>'btn'] ) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Create User', ['class' => 'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

    </div>

    <p class="row">

        @include('includes.form-error')

    </p>



@endsection