@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Update Brand</div>
                <div class="panel-body">

                    <form class="form-horizontal" role="form" method="POST" action="/updatebrand/{{$b->id}}" enctype="multipart/form-data">
                        {{csrf_field()}}

                        <div class="form-group">
                            <label for="brand" class="col-md-4 control-label">Input Brand</label>
                            <div class="col-md-6">
                                <input id="brand" type="text" class="form-control" name="name" placeholder="Brand" value="{{$b->name}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <input type="submit" value = "Update Brand" style="width: 100%; background-color: #c11717; color:white;" class="form-control">
                            </div>
                        </div>
                        <div>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li class="alert alert-danger">{{ $error }}</li>
                            @endforeach
                        </ul>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
