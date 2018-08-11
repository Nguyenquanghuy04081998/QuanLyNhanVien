<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<center>
<h1> Quản Lý Sinh Viên </h1>
    <?php
		include("ketnoi.php");
		$query="select * from quanlynhanvien";
		$rows = mysqli_query($connect,$query);

	?>
	<table border="1">
		<tr bgcolor="#CC3300" style="color:#FFFFFF; font-weight:bold">
			<th>
				Tên nhân viênn
			</th>
			<th>
				Mã nhân viên
			</th>
			<th>
				Ngày sinh
			</th>
			<th>
				Địa Chỉ
			</th>
			<th>
				Chức năng
			</th>
		</tr>
		<?php 
	while ($row=mysqli_fetch_row($rows)) {
			?>
		<tr>
			<td>
				<?php echo $row[0];?>
			</td>
			<td>
				<?php echo $row[1];?>
			</td>
			<td>
				<?php echo $row[2];?>
			</td>
			<td>
				<?php echo $row[3];?>
			</td>
			<td>
				<a href="sua.php?id=<?php echo $row[1]; ?>">Sửa</a>
				<a href="xoa.php?id=<?php echo $row[1]; ?>">Xóa</a>
			</td>
		</tr>
		<?php
		} 
	?>
	
	</table>
	<br>
	<input type="submit" name="them" value="Thêm Nhân Viên" onClick="location.href='them.php'"> 
	<input type="submit" name="them1" value="Xem danh sách nhân viên theo Tên và Mã sinh viên" onClick="location.href='danhsach.php'">
	</center>
</body>
</html>
