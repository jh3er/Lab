@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Update Shoes</div>
                <div class="panel-body">

                    <form class="form-horizontal" role="form" method="POST" action="/updateshoes/{{$shoe->id}}" enctype="multipart/form-data">
                        {{csrf_field()}}

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Name</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" placeholder="Name" value="{{$shoe->name}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="picture" class="col-md-4 control-label">Picture</label>
                            <div class="col-md-6">
                                <input id="picture" type="file" name="picture" value="{{$shoe->picture}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="brand" class="col-md-4 control-label">Old Brand</label>
                            <div class="col-md-6">
                                <input id="brand" type="text" class="form-control" disabled placeholder="Brand" value="{{$shoe->brand}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="brand" class="col-md-4 control-label">New Brand</label>
                            <div class="col-md-6">
                                <input id="brand" type="text" class="form-control" name="brand" placeholder="Brand" value="{{$shoe->brand}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="description" class="col-md-4 control-label">Description</label>
                            <div class="col-md-6">
                                <textarea id="description" name="description" class="form-control" placeholder="Description">{{$shoe->description}}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="price" class="col-md-4 control-label">Input Price</label>

                            <div class="col-md-6">
                                <input id="price" type="text" class="form-control" name="price" value="{{$shoe->price}}" placeholder="Price">

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="discount" class="col-md-4 control-label">Discount</label>

                            <div class="col-md-6">
                                <input id="discount" type="text" class="form-control" name="discount" value="{{$shoe->discount}}" placeholder="Discount">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="stock" class="col-md-4 control-label">Stock</label>

                            <div class="col-md-6">
                                <input id="stock" type="text" class="form-control" name="stock" value="{{$shoe->stock}}" placeholder="Stock">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <input type="submit" value = "Update Shoes" style="width: 100%; background-color: #c11717; color:white;" class="form-control">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
