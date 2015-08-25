<?php
	mysql_connect('localhost','root','');
	mysql_select_db('shop');
	$qr = 'select * from sanpham';
	$result = mysql_query($qr);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>INF205</title>
</head>

<body>
	<center>
	<h1>Quản Lý Sản Phẩm</h1>
	<table border="1">
		<tr>
			<th>ID</th>
			<th>Tên Sản Phẩm</th>
			<th>Giá Sản Phẩm</th>
			<th>Bảo Hành</th>
			<th>Chức Năng</th>
		</tr>
		<?php
		while($r = mysql_fetch_array($result)){
			echo '<tr>';
			echo '<td>'.$r['id'].'</td>';
			echo '<td>'.$r['tensp'].'</td>';
			echo '<td>'.$r['giasp'].'</td>';
			echo '<td>'.$r['baohanh'].'</td>';
			echo '<td><a href="add.php">Thêm</a> | <a href="edit.php?id='.$r['id'].'">Sửa</a> | <a href="del.php?id='.$r['id'].'">Xóa</a></td>';
			echo '</tr>';
		}
		?>
	</table>
</center>
</body>
</html>
