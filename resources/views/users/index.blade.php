@extends("layouts.app")

@section("content")
    <div class="row">
        <h2>Listing Users</h2>
        <div class="col-md-12">
            @if(count($users) > 0)
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>UserName</th>
                        <th>Email</th>
                        <th>Roles</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                                @foreach($user->roles as $userRole)
                                   <p>{{$userRole->name}}</p>
                                @endforeach
                            </td>
                            <td>
                                <div class="btn-group form-group">
                                    <a href="{{route("users.edit", ["id" => $user->id])}}" class="btn btn-sm btn-success"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                                    <a href="{{route("users.show", ["id" => $user->id])}}" class="btn btn-sm btn-primary"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                    <a href="{{route("users.assignRoles", ["id" => $user->id])}}" class="btn btn-sm btn-warning"><i class="fa fa-plus-square" aria-hidden="true"></i></a>
                                </div>
                                <div class="form-group">
                                    {{Form::open(["route" => ["users.destroy", $user->id]])}}
                                    {{Form::hidden("_method", "DELETE")}}
                                    {{Form::button("<i class='fa fa-minus-circle' aria-hidden='rue'></i>", ["type" => "submit", "class" => "btn btn-danger form-control"])}}
                                    {{Form::close()}}
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <a href="{{route("users.create")}}" class="btn btn-primary"><i class="fa fa-plus-circle" aria-hidden="true"></i> Create</a>
            @else
                <div class="alert alert-danger">
                    <h3>Result Not Found</h3>
                    <p><a href="{{route("users.create")}}">Click to create</a></p>
                </div>

            @endif
        </div>
    </div>
@endsection