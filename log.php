<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>登录验证</title>
</head>

<body>
<?
	 session_start(); //使用session
	require("conn.php");  //连接mysql数据库
	//获取表单元素值
	if (isset($_POST["submit"])){//判断submit是否被设置
	if (empty($_POST["user"]) or empty($_POST["password"])) {
		echo  "<font color='red'> 用户名或者密码不能为空，请重新输入！</font>";
 
	}else{
		$user = $_POST["user"];
		$password = $_POST["password"];
		$sql = "select * from user where username = '$user' and password = '$password'";
		$result = mysqli_query($conn,$sql);
		if (mysqli_num_rows($result) > 0) {
			//echo "<font color='green'>登陆成功！</font>";
			$persion = mysqli_fetch_array($result);//取结果集result的值赋给persion
 			$_SESSION["username"] = $persion["username"];//session取值方便后面的使用
 			//echo $_SESSION["username"];
 			$_SESSION["uid"] = $persion["uid"];//取当前登陆用户的uid，每个用户的uid是固定的唯一的
 			//echo $_SESSION["uid"];
			echo "<script>alert('登陆成功')</script>";
			echo "<script>window.location.href='index.php'</script>";//本地跳转到ly.php页面
 
 
		}else{
			echo "<font color='red'>用户名或者密码不存在！</font>";
		}
	}
	 
}
?>
</body>
</html>