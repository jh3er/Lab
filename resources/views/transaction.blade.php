@extends('layouts.app')

@section('content')
<?php $totalquan = 0?>
<?php $totalprice = 0?>
<br>
<br>
	<center>
	<h1>Transaction History <i style="font-size:19px" class="fa">&#xf07a;</i></h1>
	
	<table width="50%" border="0">
		<tr>
			<td><p align="center">ID</p></td>
			<td><p align="center">Email</p></td>
			<td><p align="center">Date</p></td>
			<td><p align="center">Status</p></td>
			<td> </td>
		</tr>
		<tr>
				<td colspan="4"><hr></td>
		</tr>
		@foreach($t as $tran)
		<tr>
		<form method = "get" action = "/detail/{{$tran->id}}" enctype="multipart/form-data">
			<input type="hidden" name="sId" value = "">
			<input type="hidden" name="subTotal" value ="">
		
			<td><p align="center">{{$tran->id}}</p></td>
			<td><p align="center">{{$tran->email}}</p></td>
			<td><p align="center">{{$tran->created_at}}</p></td>
			<td><p align="center">{{$tran->status}}</p></td>
			<td><a href="">
				<p align="center"><input type="submit" value = "Detail" style="width: 80px; background-color: #c11717; color:white;" class="form-control"></p>
				</a>
			</td>
			
		</tr>
		<tr>
				<td colspan="4"><hr></td>
		</tr>
		</form>
		@endforeach

	</table>
</center>

	
</body>
</html>

@endsection
