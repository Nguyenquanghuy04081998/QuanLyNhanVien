<?php
	error_reporting(E_ALL&~E_NOTICE&~E_DEPRECATED);
	$connect = mysqli_connect('localhost','root','','nhanvien');
	if (!$connect)
 	{
   		die("Không mở được mysql:".mysqli_error());
	}
		else
	{	 
	mysqli_set_charset($connect,"utf8");
	}

?>