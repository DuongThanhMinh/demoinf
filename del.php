<?php
	$id = $_GET['id'];
	mysql_connect('localhost','root','');
	mysql_select_db('shop');
	$qr = 'Delete from sanpham where id = "'.$id.'"';
	$result = mysql_query($qr);
	header('location:index.php');
?>
