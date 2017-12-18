@extends('layouts.app')

@section('content')
<?php $totalquan = 0?>
<?php $totalprice = 0?>
<br>
<br>
	<center>
	<h1>Transaction History <i style="font-size:19px" class="fa">&#xf07a;</i></h1>
	<form method = "post" action = "/detail" enctype="multipart/form-data">
	{{csrf_field()}}
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
	
		<tr>
			
			<input type="hidden" name="sId" value = "">
			<input type="hidden" name="subTotal" value ="">
		
			<td><p align="center">id</p></td>
			<td><p align="center">email</p></td>
			<td><p align="center">date</p></td>
			<td><a href="">
				<p align="center"><input type="button" value = "Detail" style="width: 80px; background-color: #c11717; color:white;" class="form-control"></p>
				</a>
			</td>
			
		</tr>
		<tr>
				<td colspan="4"><hr></td>
		</tr>
		

	</table>
</center>

	</form>
</body>
</html>

@endsection
