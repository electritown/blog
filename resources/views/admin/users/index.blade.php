@extends('admin.index')
@section('content2')

    <table class="table table-dark">
        <thead>
        <th scope="col">Name</th>
        <th scope="col">E-Mail</th>
        <th scope="col">TYPE</th>
        <th></th>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                {{-- <form action="{{ route('admin.assign') }}" method="post"> --}}
                    <td scope="row">{{ $user->name }}</td>
                    <td scope="row">{{ $user->email }}</td>
                    
                <td scope="row">{{$user->roles[0]->name =='auther' ? 'Auther' : $user->roles[0]->name=='reviewer' ? 'Reviewer' : $user->roles[0]->name=='admin' ? 'Admin': 'Not assigend' }}</td>
                    {{-- <td scope="row"><input type="checkbox" {{ $user->hasRole('User') ? 'checked' : '' }} name="role_user"></td>
                    <td><input type="checkbox" {{ $user->hasRole('Author') ? 'checked' : '' }} name="role_author"></td>
                    <td><input type="checkbox" {{ $user->hasRole('Admin') ? 'checked' : '' }} name="role_admin"></td>
                    {{ csrf_field() }} --}}
                    {{-- <td><button type="submit">Assign Roles</button></td> --}}
                </form>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection 