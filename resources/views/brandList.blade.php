@extends('layouts.app')

@section('content')
<?php $totalquan = 0?>
<?php $totalprice = 0?>
<br>
<br>
	<center>
	<h1>Brand List <i style="font-size:19px" class="fa">&#xf07a;</i></h1>
	
	<table width="50%" border="0">
		<tr>
			<td><p align="center">ID</p></td>
			<td><p align="center">Brand Name</p></td>
			<td><p align="center"></p></td>
			<td><p align="center"></p></td>
		</tr>
		<tr>
				<td colspan="4"><hr></td>
		</tr>
		<tr>
		@foreach($b as $brand)
		
			<input type="hidden" name="sId" value = "">
			<input type="hidden" name="subTotal" value ="">
		
			<td><p align="center">{{$brand->id}}</p></td>
			<td><p align="center">{{$brand->name}}</p></td>
			<td>
				<form method = "get" action = "/updatebrandview/{{$brand->id}}" enctype="multipart/form-data">
				<p align="center"><input type="submit" value = "Detail" style="width: 80px; background-color: #4286f4; color:white;" class="form-control"></p>
				</form>
			</td>
			<td><a href="">
				<p align="center"><input type="submit" value = "Delete" style="width: 80px; background-color: #c11717; color:white;" class="form-control"></p>
				</a>
			</td>
			
		</tr>
		<tr>
				<td colspan="4"><hr></td>
		</tr>
		@endforeach
		</form>
		
	</table>
</center>

	
</body>
</html>

@endsection
