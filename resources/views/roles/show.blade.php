@extends("layouts.app")

@section("content")
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label for="name" class="control-label">Name</label>
                <p>{{$role->name}}</p>
            </div>

            <div class="form-group">
                <label for="display_name" class="control-label">Display Name</label>
                <p>{{$role->display_name}}</p>
            </div>

            <div class="form-group">
                <label for="description" class="control-label">Description</label>
                <p>{{$role->description}}</p>
            </div>
        </div>
    </div>
@endsection