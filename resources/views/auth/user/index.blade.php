@extends('layouts.app')

@section('content')
<div class="container">
    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
    <div class="main-content"> 

        <table class="table  table-bordered table-hover" id="emp_list">

            <thead>

            <tr>

            <th>ID</th>

            <th>Name</th>

            <th>Mobile</th>

            <th>DOB</th>

            <th>Gender</th>

            <th>Profile</th>

            <th>Actions</th>

            </tr>

            </thead>
            <tbody>
                @foreach($users as $key => $user)
                    <tr>    
                        <td>{{ $user->id }}</td>

                        <td>{{ $user->name }}</td>

                        <td>{{ $user->mobile }}</td>

                        <td>{{ $user->dob }}</td>

                        <td>{{ $user->gender }}</td>

                        <td><img src="{{ asset($user->profile) }}" width="50px" height="50px"> </td>
                        <td>
                            <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button class="btn btn-danger m-1">Delete User</button>
                            </form>

                            <a class="btn btn-small btn-info" href="{{ route('user.edit', $user->id) }}">Edit</a>
                        </td>
                    </tr>    
                @endforeach
            </tbody>

        </table>
        
    </div>

</div>
@endsection