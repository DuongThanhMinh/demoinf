<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Thêm Sản Phẩm</title>
</head>

<body>
<a href="index.php" style="text-decoration:none;font-size:16px;color:blue;"><~ Quay Lại</a>
<h1>Thêm Sản Phẩm</h1>
<form action="xl_add.php" method="post">
	<table>
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
			<td><input type="submit" name="submit" value="Thêm" /></td>
		</tr>
	</table>
</form>
</body>
</html>
