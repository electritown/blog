@extends('admin.index')

@section('Title')
Create User
@endsection


@section('content3')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> Create new user</div>

                <div class="card-body">
                    <form method="POST" class="form" action="{{route('user.store')}}">
                        <div class="form-group">
                            @csrf
                            <label class="label">Name: </label>
                            <input type="text" name="name" class="form-control" required />
                        </div>
                        <div class="form-group">
                            @csrf
                            <label class="label">Email: </label>
                            <input type="text" name="email" class="form-control" required />
                        </div>
                        <div class="form-group">
                            @csrf
                            <label class="label">Password: </label>
                            <input type="password" name="password" class="form-control" required />
                        </div>
                        <div class="form-group"> <label class="label" name="role">role:</label>
                            <select id="role" class="form-control" name="role" type="role">
                                @foreach($roles as $role)
                                <option value='{{ $role->id }}'>{{ ucwords($role->name) }}</option>
                                @endforeach

                            </select>
                        </div>


                        <div class="form-group">
                             <input type="submit" class="btn btn-success" value="Create user">
                            </div>
                    </form>
                </div>

            </div>

        </div>



    </div>
</div>

@endsection