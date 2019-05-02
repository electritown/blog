@extends('admin.index')

@section('Title')
Create User
@endsection


@section('content2')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> Create new user</div>

                <div class="card-body">
                <form method="POST" class="form" action="route{{'users/add'}}">
                        <div class="form-group">
                            
                            <label class="label">Name: </label>
                            <input type="text" name="name" class="form-control" required />
                        </div>
                        <div class="form-group">
                            <label class="label">Email: </label>
                            <input type="text" name="email" class="form-control" required />
                        </div>
                        <div class="form-group">
                            <label class="label">Password: </label>
                            <input type="password" name="password" class="form-control" required />
                        </div>
                        <div class="form-group"> <label class="label" name="role">Tags:</label>
                            <select id="role" class="form-control" name="role" type="role">
                                @foreach($roles as $role)
                                <option value='{{ $role->id }}'>{{ ucwords($role->name) }}</option>
                                @endforeach

                            </select>
                        </div>


                        <div class="form-group">
                             <button type="submit" class="btn btn-success">Create user</button>
                            </div>
                    </form>
                </div>

            </div>

        </div>



    </div>
</div>

@endsection