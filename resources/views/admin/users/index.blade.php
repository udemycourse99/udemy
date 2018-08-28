<?php use App\User; ?>
<?php use App\photos; ?>

@extends ('layouts.admin');
@section('content')

    @if(Session::has('deleted_user'))

        <p class="bg-danger">{{session('deleted_user')}}</p>

    @endif

    <h1>Users</h1>

    <table>
        <div class="container">

            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Picture</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th>Created Date</th>
                        <th>Updated Date</th>
                    </tr>
                </thead>
                <tbody>

               @if($users)

                    @foreach($users as $user)

                        <tbody>
                            <tr>
                                <td>{{$user->id}}</td>
                                <td><img height="50" src="{!! URL::asset($user->photo ? $user->photo->file : 'https://via.placeholder.com/350x150') !!}" alt=""></td>
                                <td><a href="{{route('admin.users.edit', $user->id)}}">{{$user->name}}</a></td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->role->name}}</td>
                                <td>{{$user->is_active==1 ? 'Active' : 'Not Active'}}</td>
                                <td>{{$user->created_at->diffForHumans()}}</td>
                                <td>{{$user->updated_at->diffForHumans()}}</td>
                            </tr>
                        </tbody>

                    @endforeach

                @endif

            </table>
        </div>
    </table>


@endsection