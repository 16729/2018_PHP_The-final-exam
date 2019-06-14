<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>用户注册</title>
 <style type="text/css">
 body{
	 background-color:aliceblue;}
.content{
	width: 353px;
	height: 258px;
	background: url(images/login.jpg);
	margin: 0 auto;
	margin-top: 150px;
	 }
	 h3{
		 font-family: "微软雅黑";
	 }
	 .a{
		 margin-top: 94px;
		 margin-left: 99px;
		 font-size: 14px;
		 width: 182px;
		 height: 25px;
		 border:none;
		 
	 }
	 .b{
		 height: 20px;
		 margin-top: 16px;
		 margin-left: 99px;
		 font-size: 14px;
		 width: 182px;
		 border:none;
	 }
	 .c{
		 margin-top: 18px;
		 margin-left: 99px;
		 font-size: 18px;
		 width: 182px;
		 border:none;
	 }
	 .d{
		 margin-top: 15px;
		 width: 60px;
		 height: 25px;
		 background-image: url(images/login in.jpg);
		 color: white;
		 border: none;
		 margin-left: 75px;
	 }
 form input:focus {
    outline: none;
    /*去掉轮廓*/
    box-shadow: 0 0 5px #0dbfdd;
    /*阴影向外扩散5px*/
}
form-signup {
    width: 515px;
    margin: 0 auto;
    padding: 10px;
    border: 1px solid #cccbcb;
    border-radius: 7px;
    font-size: 16px;
    font-weight: bold;
    color: #fff;
    background: #0dbfdd;
    cursor: pointer;
    /*鼠标改变*/
}
   </style>
<body>
	<div></div>
<div class="content">
		<form method="post" action="login_1.php" style="margin:0 auto">
			<input class="a"type="text" name="user" maxlength="7"><br>
			<input class="b"type="password" name="password" maxlength="8"><br>
			<input class="c"type="password" name="password1" maxlength="8">
			<input class="d"type="submit" name="submit" value="Sign">
			<input class="d"type="reset" value="重置" name="reset">
		</form>
</div>
</body>
</html>