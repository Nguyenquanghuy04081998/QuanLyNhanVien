<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<center>
    <?php
		include("ketnoi.php");
		$query="Call HT();";
		$rows = mysqli_query($connect,$query);

	?>
	<table border="1">
		<tr bgcolor="#CC3300" style="color:#FFFFFF; font-weight:bold">
			<th>
				Tên nhân viên
			</th>
			<th>
				Mã nhân viên
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
				<?php echo $row[1];?>
			</td>
			<td>
				<?php echo $row[0];?>
			</td>
			
			<td>
				<a href="sua.php?id=<?php echo $row[0]; ?>">Sửa</a>
				<a href="xoa.php?id=<?php echo $row[0]; ?>">Xóa</a>
			</td>
		</tr>
		<?php
		} 
	?>
	
	</table> <br />
<input type="button" value="Quay lại trang trước" onclick="history.back(-1)" />
</center>
</body>
</html>
