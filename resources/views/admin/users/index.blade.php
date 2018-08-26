<?php use App\User; ?>

@extends ('layouts.admin');
@section('content')
    <h1>Users</h1>

    <table>
        <div class="container">

            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
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