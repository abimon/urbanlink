@extends('layouts.admin')
@section('content')
<div class="container">
    <table class="table table-responsive">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Contact</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach(App\Models\User::select('id','name','email','contact')->get() as $key=>$user)
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->contact }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <form action="{{ route('user.update', $user->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="role" value="{{$user->role=='Client'?'Admin':'Client'}}">
                        <button type="submit" class="btn btn-sm {{$user->role=='Client'?'btn-success':'btn-danger'}}">{{$user->role=='Client'?'Give':'Deny'}} Admin Rights</button>
                    </form>
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection