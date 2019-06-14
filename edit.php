<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>更新留言</title>
</head>

<body>
<?
	require("conn.php");  //连接mysql数据库
	//获取表单元素值
	$id=$_GET["id"];
	$title=$_POST["title"];
	$author=$_POST["author"];
	$Email=$_POST["Email"];
	$content=$_POST["content"];
	$IP=$_SERVER["REMOTE_ADDR"];  //获取客户端ip地址
	$sql="update lyb set title='$title',author='$author',Email='$Email',content='$content' where ID=$id";
	mysql_query($sql) or die("执行失败！");
	echo "<script>alert('留言修改成功');
	      location.href='glshydelall_root.php';</script>";
	
?>
	
</body>
</html>







