@extends("layouts.app")

@section("content")
    <div class="row">
        <div class="col-md-12">
            <p>Assign Permissions to {{$role->name}} role</p>
            {{Form::open(["route" => ["roles.attachPermission", $role->id]])}}
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Permissions For Module</th>
                            <th>Assign</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($permissions as $permission)
                            <tr>
                                <td>{{$permission->name}}</td>
                                <td><input name="permissions[]" type="checkbox" value="{{$permission->id}}"></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <button class="btn btn-success"><i class="fa fa-plus-square" aria-hidden="true"></i> Assign Permissions</button>
            {{Form::close()}}
        </div>
    </div>
@endsection