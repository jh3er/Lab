@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Update Brand</div>
                <div class="panel-body">

                    <form class="form-horizontal" role="form" method="POST" action="" enctype="multipart/form-data">
                        

                        <div class="form-group">
                            <label for="brand" class="col-md-4 control-label">Input Brand</label>
                            <div class="col-md-6">
                                <input id="brand" type="text" class="form-control" name="brand" placeholder="Brand" value="">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <input type="submit" value = "Update Brand" style="width: 100%; background-color: #c11717; color:white;" class="form-control">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
