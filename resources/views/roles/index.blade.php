@extends("layouts.app")

@section("content")
    <div class="row">
        <div class="col-md-12">
           @if(count($roles) > 0)
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Display_Name</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($roles as $role)
                        <tr>
                            <td>{{$role->id}}</td>
                            <td>{{$role->name}}</td>
                            <td>{{$role->display_name}}</td>
                            <td>{{$role->description}}</td>
                            <td>

                                <div class="form-group">
                                    <a href="{{route("roles.show", ["id" => $role->id])}}" class="btn btn-primary form-control"><i class="fa fa-eye" aria-hidden="true"></i> View</a>
                                </div>

                                <div class="form-group">
                                    <a href="{{route("roles.edit", ["id" => $role->id])}}" class="btn btn-success form-control"><i class="fa fa-pencil-square" aria-hidden="true"></i> Edit</a>
                                </div>

                                <div class="form-group">
                                    <a href="{{route("roles.assign", ["id" => $role->id])}}" class="btn btn-warning form-control"><i class="fa fa-plus-square" aria-hidden="true"></i> Assign Permissions</a>
                                </div>

                                <div class="form-group">
                                    {{Form::open(array("url" => "/home/roles/". $role->id))}}
                                    {{ Form::hidden('_method', 'DELETE') }}
                                    <button type="submit" class="btn btn-danger form-control"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>

                                    {{Form::close()}}
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <a href="{{route("roles.create")}}" class="btn btn-primary"><i class="fa fa-plus-square" aria-hidden="true"></i> Create New</a>
           @else
               <div class="alert alert-danger">
                   <h3>Result Not Found!</h3>
               </div>
           @endif
        </div>
    </div>
@endsection