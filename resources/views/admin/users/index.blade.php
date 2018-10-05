@extends('layouts.app')

@section('content')

    <h1>Users</h1>
    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Status</th>
            <th>Created</th>
            <th>Updated</th>
        </tr>
        </thead>
        <tbody>
        @if($users)

            @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->role ? $user->role->name : 'User has no role'}}</td>//aantal uren gecreerd
            <td>{{$user->is_active == 1 ? 'Active' : 'Not active' }}</td> als user is active 1 is doe dan active anders not active
            <td>{{$user->created_at->diffForHumans()}}</td> //aantal uren gecreerd
            <td>{{$user->updated_at->diffForHumans()}}</td>
        </tr>

            @endforeach

            @endif

        </tbody>
    </table>

@stop