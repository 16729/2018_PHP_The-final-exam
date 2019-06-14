<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>连接数据库</title>
</head>

<body>
<?
	//连接MySQL数据库
	$conn=mysql_connect("localhost","root","root123456");   //连接服务器
	mysql_query("set names 'urf-8'");//设置字符集
	mysql_select_db("blog40",$conn);
	
?>
</body>
</html>