@extends("layouts.app")

@section("content")
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>Form Create New Role</h4>
                </div>

                <div class="panel-body">
                    @if(count($errors) > 0)
                        <div class="alert alert-warning">
                            @foreach($errors->all() as $error)
                                <p>{{$error}}</p>
                            @endforeach
                        </div>
                    @endif
                    {{Form::open(["route" => "roles.store", "method" => "post"])}}
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
                            <button type="submit" class="btn btn-success form-control"><i class="fa fa-plus-square" aria-hidden="true"></i> Create</button>
                        </div>
                    {{Form::close()}}

                </div>
            </div>
        </div>
    </div>
@endsection