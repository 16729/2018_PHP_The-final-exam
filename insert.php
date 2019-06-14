<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>插入记录</title>
</head>

<body>
<?
	require("conn.php");  //连接mysql数据库
	//获取表单元素值
	$title=$_POST["title"];
	$author=$_POST["author"];
	$Email=$_POST["Email"];
	$content=$_POST["content"];
	$IP=$_SERVER["REMOTE_ADDR"];  //获取客户端ip地址
	$sql="insert into lyb(title,author,Email,content,IP,addtime) values('$title','$author','$Email','$content','$IP','date(Y-m-d h:i:s)')";
	mysql_query($sql) or die("执行失败！");
	header("location:glshydelall.php");
?>
	
</body>
</html>







