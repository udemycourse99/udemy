@extends ('layouts.admin')

@section('content')

    <h1>Create Users</h1>

            {!! Form::open(['method'=>'POST', 'action' => 'AdminUsersController@store', 'files'=>true])!!}

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
                        {!! Form::select('role_id', [''=>'Choose Options'] + $roles, ['class'=>'form-control'])!!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('is_active', 'Status:') !!}
                        {!! Form::select('is_active', array('1'=>'Active', '0'=>'Not Active'), ['class'=>'form-control'] ) !!}
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

                    @include('includes.form-error')

@endsection