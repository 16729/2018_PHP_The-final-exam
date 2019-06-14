<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
	<?
	require("conn.php");  //连接mysql数据库
	//获取表单元素值
	$user=$_POST["user"];
	$password=$_POST["password"];
	$password1=$_POST["password1"];
	if(empty($password)&&empty($password1)){           
		echo "<script type='text/javascript'>alert('密码不能为空！');history.back();</script>";
}
	else if (strlen($password)<6){
		echo "<script type='text/javascript'>alert('密码不能小于6位！');history.back();</script>";
}	else if($password!==$password1) {
		echo "<script type='text/javascript'>alert('两次密码不一致！请重新输入！');history.back();</script>";
}	else{
		echo "<script type='text/javascript'>alert('注册成功');</script>";
		$sql="insert into user(user,password) values('$user','$password')";
		mysql_query($sql) or die("执行失败！");
		header("location:index.php");
}
?>
</body>
</html>