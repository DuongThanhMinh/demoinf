<?php
	$id = $_GET['id'];
	if(isset($_GET['edit'])){
			mysql_connect('localhost','root','');
			mysql_select_db('shop');

			$tensp = $_GET['tensp'];
			$giasp = $_GET['giasp'];
			$baohanh = $_GET['baohanh'];

			$qr = 'update sanpham set tensp = "'.$tensp.'",giasp = "'.$giasp.'",baohanh = "'.$baohanh.'" Where id = "'.$id.'"';
			$result = mysql_query($qr);
			header('location:index.php');
	}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sửa Sản Phẩm</title>
</head>

<body>
<a href="index.php" style="text-decoration:none;font-size:16px;color:blue;"><~ Quay Lại</a>
<h1>Sửa Sản Phẩm</h1>
<form action="" method="get">
<input type="hidden" name="id" value="<?php echo $id;?>" />
<input type="hidden" name="edit" />
	<table>
	<tr>
			<td>ID :</td>
			<td><input type="text" name="id"  value="<?php echo $id;?>"/></td>
		</tr>
		<tr>
			<td>Tên Sản Phẩm :</td>
			<td><input type="text" name="tensp" /></td>
		</tr>
		<tr>
			<td>Giá Sản Phẩm :</td>
			<td><input type="text" name="giasp" /></td>
		</tr>
		<tr>
			<td>Bảo Hành :</td>
			<td><input type="text" name="baohanh" /></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Sửa" /></td>
		</tr>
	</table>
</form>
</body>
</html>
