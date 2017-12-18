@extends('layouts.app')

@section('content')

@foreach($s->chunk(4) as $shoes)
	<div class="row">
		@foreach($shoes as $shoe)
			<div class="col-sm-6 col-md-3">
				<div class="thumbnail">
					<img class="img-responsive" src="/upload/shoes/{{$shoe->picture}}" >
					<div class="caption">
						<h3>{{ $shoe->name }}</h3>
						<div class="clearfix">
							<div class="pull-left price">RP. {{ $shoe->price }} ,-</div>
							<form  method="get" action="/display/{{$shoe->id}}" enctype="multipart/form-data">
								<input type="submit" class="btn btn-success pull-right" value="Display">
							</form>
						</div>
					</div>
				</div>
			</div>
		@endforeach
	</div>
{{$s->links()}}

@endforeach

@endsection