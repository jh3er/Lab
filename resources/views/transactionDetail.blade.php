@extends('layouts.app')

@section('content')
<?php $totalquan = 0?>
<?php $totalprice = 0?>
<br>
<br>
	<center>
	<h1>Transaction History <i style="font-size:19px" class="fa">&#xf07a;</i></h1>
	<form method = "post" action = "" enctype="multipart/form-data">
	{{csrf_field()}}
	<table width="50%" border="0">
		
		<tr>
			<td><p align="center">Shoes</p></td>
			<td><p align="center">Price</p></td>
			<td><p align="center">Qty</p></td>
			<td> </td>
		</tr>
		<tr>
				<td colspan="3"><hr></td>
		</tr>
		@foreach($d as $detail)
		<tr>
			<input type="hidden" name="sId" value = "">
			<input type="hidden" name="subTotal" value ="">
			
			<td><p align="center">{{$detail->name}}</p></td>
			<td><p align="center">{{$detail->Qty * ($detail->price - $detail->discount)}}</p></td>
			<td><p align="center">{{$detail->Qty}}</p></td>
			
		</tr>
		<tr>
				<td colspan="3"><hr></td>
		</tr>

		<?php $totalquan += $detail->Qty?>
		<?php $totalprice += ($detail->Qty * ($detail->price - $detail->discount))?>
		@endforeach

		<tr>
			<td colspan="6"><h4 style="display: inline-block;padding: 0 5px;"><br><br><br><br><br>Total Quantity : {{$totalquan}}| </h4><h4 style="color: #c11717; display: inline-block;padding: 0 5px;"> Grand Total : {{$totalprice}}</h4><h4 style="display: inline-block;">|</h4></td>
		</tr>
		<tr><td colspan="6"><hr></td></tr>
		<tr>
			<td colspan="3"><a href="/tranhistory">Back</a>
			</td>
		</tr>
		
	</table>
</center>

	</form>
</body>
</html>

@endsection
