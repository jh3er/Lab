@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Update User</div>
                <div class="panel-body">

                    <form class="form-horizontal" role="form" method="POST" action="/updateUser/{{$u->id}}" enctype="multipart/form-data">
                        {{csrf_field()}}

                        <div class="form-group">
                      
                            <div class="col-md-6" style="margin-left: 15%;">
                                <img src="/upload/profile/{{$u->profile_picture}}" height="200px" width="200px">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Name</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" placeholder="Member Name" value="{{$u->name}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" placeholder="Member Email" value="{{$u->email}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="profilePicture" class="col-md-4 control-label">Profile Picture</label>
                            <div class="col-md-6">
                                <input id="profilePicture" type="file" name="profilePicture">
                            </div>

                        </div>
                        
                        <div class="form-group">
                            <label for="gender" class="col-md-4 control-label">Gender</label>

                            <div class="col-md-6">
                                @if($u->gender == "male")
                                <input type="radio" id="gender" name="gender" value="male" checked="checked">Male
                                <input type="radio" id="gender" name="gender" value="female">Female

                                @else
                                <input type="radio" id="gender" name="gender" value="male">Male
                                <input type="radio" id="gender" name="gender" value="female" checked="checked">Female

                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="dob" class="col-md-4 control-label">Date of Birth</label>

                            <div class="col-md-6">
                                <input id="dob" type="date" class="form-control" name="dob" value="{{$u->dob}}">

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="address" class="col-md-4 control-label">Address</label>

                            <div class="col-md-6">
                                <textarea id="address" name="address" class="form-control">
                                 {{$u->address}}
                                </textarea>

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <input type="submit" class="btn btn-primary" value="Update User">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
