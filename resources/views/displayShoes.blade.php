@extends('layouts.app')

@section('content')
<div class="row pagination-centered">
<div class="col-sm-6 col-md-3 col-md-offset-4">
	<form  method="post" action="/addCart/{{$shoe->id}}/{{$shoe->price}}" enctype="multipart/form-data">
		{{csrf_field()}}
	<div class="thumbnail">
		<img src="/upload/shoes/{{$shoe->picture}}">
		<div class="caption">
			<h3>{{ $shoe->name }}</h3>
			<p>stock : {{$shoe->stock }} | Brand : {{ $shoe->brand }}</p>
			<p>Description
				{{$shoe->description}}
			</p>

			<input type="text" name="qty" placeholder="quantity">

			<div class="clearfix">
				<div class="pull-left price">RP. {{ $shoe->price }} ,-</div>
				
					<input type="submit" class="btn btn-success pull-right" value="add to cart">
				</form>
			</div>
		</div>
	</div>
</div>
</div>

@endsection