<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
	<?php include('ketnoi.php'); ?>
	<form method="post">
		<table>
			<tr>
				<td> Tên Nhân Viên : </td>
				<td><input type='text' name='txtTenNV' />
				</td>
			</tr>
			<tr>
				<td> Mã Nhân viên : </td>
				<td><input type='text' name='txtMaNV' />
				</td>
			</tr>
			<tr>
				<td> Nơi Sinh : </td>
				<td><input type="text" name="txtNoisinh" />
				</td>
			</tr>
			<tr>
				<td> Ngày Sinh : </td>
				<td><input type="text" name="txtNgaysinh" />
				</td>
			</tr>
		</table>
		<input name="submit" type="submit" value="Thêm" />
	</form>
	<?php
	$name  		= addslashes($_POST['txtTenNV']);
	$id   		= addslashes($_POST['txtMaNV']);
	$ngaysinh   = addslashes($_POST['txtNgaysinh']);
	$noisinh    = addslashes($_POST['txtNoisinh']);
	
	$add = "INSERT INTO quanlynhanvien ( NameNV,id_NV, date_of_birth, place_of_birth)
	VALUE ('{$name}', '{$id}','{$ngaysinh}','{$noisinh}')";

	if ($connect->query($add)===true)
	{
		echo " Thêm thành công! <a href='index.php'>về trang quản lý</a>";
	}
	?>
</body>
