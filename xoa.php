<html>
<head>
	    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
	    <?php
	include("ketnoi.php");
	$idnv =  $_GET["id"];
	$query="select * from quanlynhanvien where id_NV='".$idnv."'";
	$rows = mysqli_query($connect,$query);
	if(isset($_POST['btn_ok']))
	{
		$query="delete from quanlynhanvien where id_NV='".$idnv."'";
		if(mysqli_query($connect,$query))
		{
			header('Location:index.php');
		}
		else
		{
			echo "<script>";
			echo "alert('xóa thất bại')";
			echo "</script>";
		}
	}
	?>
	Bạn muốn xóa nhân viên này?
	<form id="form1" name="form1" method="post">
		<table>
			<tr>
				<th>
					Tên nhân viên

				</th>
				<th>
					Mã nhân viên
				</th>
				<th>
					Ngày sinh
				</th>
				<th>
					Địa chỉ
				</th>
			</tr>
			<?php 
			while ($row=mysqli_fetch_row($rows)) {
				?>
				<tr>
					<td>
						<input type="text" name="NameNV" value="<?php echo $row[0];?>" />

					</td>
					<td>
						<input type="text" name="id_NV" value="<?php echo $row[1];?>"/>

					</td>
					<td>
						<input type="text" name="date_of_birth" value="<?php echo $row[2];?>" />

					</td>
					<td>
						<input type="text" name="place_of_birth" value="<?php echo $row[3];?>" />

					</td>
				</tr>
				<?php
			}
			?>
		</table>
		<input type="submit" name="btn_ok" value="xác nhận">
	</form>
</body>
</html>
