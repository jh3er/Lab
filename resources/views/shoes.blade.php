@extends('layouts.app')

@section('content')

<div class="row" style="padding-left: 5%; padding-right: 5%;">
		<form action="/shoessearch" method = "GET">
            <center>
	            <input type="text" name="search" style = "width: 47% ;border-radius: 5px; display: inline-block;" class="form-control" placeholder="Search by name or brand">
	            <input type="submit" value = "Search" class="btn" style="width: 100px;">
            </center>
        </form>
        <br>
@foreach($s->chunk(4) as $shoes)
		@foreach($shoes as $shoe)
			<div class="col-sm-6 col-md-3">
				<div class="thumbnail">
					<img class="img-responsive" src="/upload/shoes/{{$shoe->picture}}" style="width:200px;height:200px;">
					<div class="caption">
						<h3>{{ $shoe->name }}</h3>
						<div class="clearfix">
							<div class="pull-left price"><strike>RP. {{ $shoe->price }} ,-</strike></div>
							<br>
							<div class="pull-left price">RP. {{ $shoe->price - $shoe->discount }} ,-</div>
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
	
@endforeach

</div>
<div class="row" style="padding-left: 5%; padding-right: 5%; text-align: center;">
	{{$s->links()}}
	</form>
</div>

@endsection