@extends('layouts.app')

@section('content')

@foreach($s->chunk(4) as $shoes)
	<div class="row" style="padding-left: 1%; padding-right: 1%;">
		@foreach($shoes as $shoe)
			<div class="col-sm-6 col-md-3">
				<div class="thumbnail">
					<img class="img-responsive" src="/upload/shoes/{{$shoe->picture}}" style="width:200px;height:200px;">
					<div class="caption">
						<h3>{{ $shoe->name }}</h3>
						<div class="clearfix">
							<div class="pull-left price">RP. {{ $shoe->price }} ,-</div>
							@if(Auth::user()->email === 'admin@admin.com')
							<br>
							<form  method="get" action="/updateShoe/{{$shoe->id}}" enctype="multipart/form-data">
								<input type="submit" class="btn btn-success pull-right" value="Display">
							</form>
							<form  method="post" action="/deleteshoes/{{$shoe->id}}" enctype="multipart/form-data">
								{{csrf_field()}}
								<input type="submit" class="btn btn-danger pull-right" value="Delete">
						
							</form>
							@else
							<form  method="get" action="/display/{{$shoe->id}}" enctype="multipart/form-data">
								<br>
								<input type="submit" class="btn btn-success pull-right" value="Display">
							</form>
							@endif
						</div>
					</div>
				</div>
			</div>
		@endforeach
	</div>
@endforeach

{{$s->links()}}

@endsection