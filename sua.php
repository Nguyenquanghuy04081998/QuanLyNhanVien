<html>
<head>
	    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
	<form method="post">
		    <?php
		include("ketnoi.php");
		$idnv =  $_GET["id"];
		$query="select * from quanlynhanvien where id_NV='".$idnv."'";
		$rows = mysqli_query($connect,$query);

		?>
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
						<input type="text" name="textNameNV" value="<?php echo $row[0];?>" />

					</td>
					<td>
						<input type="text" name="textid_NV" value="<?php echo $row[1];?>"/>

					</td>
					<td>
						<input type="text" name="textdate_of_birth" value="<?php echo $row[2];?>" />

					</td>
					<td>
						<input type="text" name="textplace_of_birth" value="<?php echo $row[3];?>" />

					</td>
				</tr>
				<?php
			}
			?>
		</table>
		<input type="submit" name="them" value="Sửa Nhân Viên">
		<?php 

    
    if(isset($_POST['them']))
    {
    	$NameNV   = addslashes($_POST['textNameNV']);
    	$idnv     = addslashes($_POST['textid_NV']);
    	$ngaysinh = addslashes($_POST['textdate_of_birth']);
    	$diachi   = addslashes($_POST['textplace_of_birth']);
    	$query="UPDATE quanlynhanvien SET  NameNV = '$NameNV', date_of_birth= '$ngaysinh',place_of_birth = '$diachi' where id_NV = '$idnv'";
    	echo $query;
    	if(mysqli_query($connect,$query))
    	{
    		header('Location:index.php');
    	}
    	else
    	{
    		echo "<script>";
    		echo "alert('Sửa thất bại')";
    		echo "</script>";
    	}
    }
    ?>
</form>
</body>
</html>
