@extends('layouts.app')

@section('content')
<?php $totalquan = 0?>
<?php $totalprice = 0?>
<br>
<br>
	<center>
	<h1>Your Cart</h1>
	<form method = "post" action = "/checkout" enctype="multipart/form-data">
	{{csrf_field()}}
	<table width="50%" border="0">
		
		<tr>
			<td><p align="center">Image</p></td>
			<td><p align="center">Name</p></td>
			<td><p align="center">Qty</p></td>
			<td><p align="center">Price</p></td>
			<td><p align="center">Sub Total</p></td>
			<td> </td>
		</tr>
		<tr>
				<td colspan="6"><hr></td>
		</tr>
	
		<tr>
			@foreach($c as $cart)
			<input type="hidden" name="sId" value = "{{$cart->sId}}">
			<input type="hidden" name="subTotal" value ="{{$cart->subTotal}}">
			
			<td width="30%"><center><img src="/upload/shoes/{{$cart->picture}}" height="70px" width="80px"></center></td>
			<td><p align="center">{{$cart->name}}</p></td>
			<td><p align="center">{{$cart->quantity}}</p></td>
			<td><p align="center">{{($cart->price - $cart->discount)}}</p></td>
			<td><p align="center">{{$cart->subTotal}}</p></td>
			<td><a href="/deleteCart/{{$cart->id}}">
				<p align="center"><input type="button" value = "Delete" style="width: 80px; background-color: #c11717; color:white;" class="form-control"></p>
				</a>
			</td>
			
		</tr>
		<tr>
				<td colspan="6"><hr></td>
		</tr>
		<?php $totalquan += $cart->quantity?>
		<?php $totalprice += $cart->subTotal?>
		@endforeach

		<tr>
			<td colspan="6"><h4 style="display: inline-block;padding: 0 5px;"><br><br><br><br><br>Total Quantity : {{$totalquan}} | </h4><h4 style="color: #c11717; display: inline-block;padding: 0 5px;"> Grand Total : {{$totalprice}}</h4><h4 style="display: inline-block;">|</h4></td>
		</tr>
		<tr><td colspan="6"><hr></td></tr>
		<tr>
			<td colspan="3">Input Payment : <input type="number" name="amount" class="form-control" style=" width: 230px ; display: inline-block;"></td>
			<td colspan="3"><input type="submit" value = "Complete the Payment" style="background-color: #3498DB; color:white; display: inline-block;" class="form-control"></td>
		</tr>
	</table>
</center>

	</form>
</body>
</html>

@endsection
