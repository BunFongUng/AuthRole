@extends("layouts.app")

@section("content")
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Form Editing Role</h3>
                </div>

                <div class="panel-body">
                    {{Form::model($role, ["route" => ["roles.update", $role->id], "method" => "PATCH"])}}
                        <div class="form-group">
                            {{Form::label("name", "Name", ["class" => "control-label"])}}
                            {{Form::text("name", old("name"), ["class" => "form-control"])}}
                        </div>

                        <div class="form-group">
                            {{Form::label("display_name", "Display_Name", ["class" => "control-label"])}}
                            {{Form::text("display_name", old("display_name"), ["class" => "form-control"])}}
                        </div>

                        <div class="form-group">
                            {{Form::label("description", "Description", ["class" => "control-label"])}}
                            {{Form::text("description", old("description"), ["class" => "form-control"])}}
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-success form-control"><i class="fa fa-pencil" aria-hidden="true"></i> Update</button>
                        </div>

                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
@endsection