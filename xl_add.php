<?php
	mysql_connect('localhost','root','');
	mysql_select_db('shop');
	$id = $_POST['id'];
	$tensp = $_POST['tensp'];
	$giasp = $_POST['giasp'];
	$baohanh = $_POST['baohanh'];

	$qr = "insert into sanpham value('$id','$tensp','$giasp','$baohanh')";
	$result = mysql_query($qr);
	header('location:index.php');
?>
