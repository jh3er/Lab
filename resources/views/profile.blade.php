@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-5" style="background-color: lightgrey;">
            <h1 align="center">Profile</h1>	
            <div class="logo" style="background-color: grey; height: 100px; width: 100px; margin:0 auto;"></div>
            <form class="form-horizontal">
            <div class="form-group">
                <div class="col-md-6" style="margin-left: 25%;">
                    <input id="name" type="text" class="form-control" name="name" placeholder="Nama Member">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6" style="margin-left: 25%;">
                    <input id="email" type="email" class="form-control" name="email" placeholder="Email Member">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6" style="margin-left: 25%;">
                    <input id="profilePicture" type="file" name="profilePicture">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6" style="margin-left: 25%;">
                	<input type="radio" id="gender" name="gender" value="male">Male
					<input type="radio" id="gender" name="gender" value="female">Female
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6" style="margin-left: 25%;">
                    <input id="dob" type="date" class="form-control" name="dob">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6" style="margin-left: 25%;">
                    <textarea id="address" name="address" class="form-control" placeholder="Address Member"></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-btn fa-user"></i> Edit Profile
                    </button>
                </div>
			</div>
        </div>
    </div>
</div>
@endsection
