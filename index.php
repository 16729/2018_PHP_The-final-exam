<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>首页</title>
	<link href="style/index.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div id="container">
		<header>
			<div class="logo">
				<marquee loop="-1" scrollamount="3" style="color:gray">欢迎来到我的博客~</marquee>
			</div>
			<div class="menu">
				<ul>
			  		<li><a href="#">首页</a></li>
					<li><a href="#">相册</a></li>
					<li><a href="#">音乐</a></li>
					<li><a href="#">日常随笔</a></li> 
					<li><a href="#">联系</a></li> 
					<li><a href="#">订阅</a></li> 
					<li><a href="glshydelall.php">留言</a></li> 
				</ul>
			</div>
		</header>
		<div class="content">
			<div class="left">
				<div class="section">
					<div class="biaoti">
					<h3>用户登录</h3>
					</div>
					<form method="post" action="index.php"class="bd">
						用户名：<input type="text" name="username"><br>
						密码：&nbsp;&nbsp;&nbsp;<input type="password" name="password"><br>
						<a href="login.php"><input type="button" name="login" value="用户注册" style="margin:10px 0 10px 40px"></a>
						<a><input type="submit" name="registe" value="登录" style="margin:10px 20px 10px 5px"></a>
					</form>
<?
	require("conn.php");  //连接mysql数据库
	 session_start(); //使用session
	 header('Content-type:text/html;charset=utf-8');   
	//获取表单元素值
	if (isset($_POST["registe"])){//判断submit是否被设置
	if (empty($_POST["username"]) or empty($_POST["password"])) {
		echo "<script type='text/javascript'>alert('用户名或密码不能为空！请重新输入！');history.back();</script>";
	}else{
		$user = $_POST["username"];
		$password = $_POST["password"];
		$sql = "select * from user where user = '$user' and password = '$password'";
		$result = mysql_query("$sql",$conn);
		if (mysql_num_rows($result) > 0) {
			$_SESSION['user']=$user;
			$persion = mysqli_fetch_array($result);//取结果集result的值赋给persion
			echo "<script>alert('登陆成功')</script>";
			echo "<script>window.location.href='index_root.php'</script>";//本地跳转到index_root.php页面
			}
			else{
			echo "<script>alert('用户名或密码不正确！！')</script>";
		}	
		}
	}else{
		
	}
?>					
				</div>
				<br><br>
				<div class="section">
					<div class="biaoti">
						<h3>最新留言</h3>
					</div>
					<ul class="ull">
						<li><img width="20px" height="20px" src="images/juli.png" style="padding-right: 10px">1. Re:java Pattern和Matcher详解不错，总结的很到位！--控球强迫症
						<li><img width="20px" height="20px" src="images/juli.png" style="padding-right: 10px">2. Re:Java SE 8 的流库学习笔记哈哈，《Java核心技术》摘选--弗兰克的猫</li>
						<li><img width="20px" height="20px" src="images/juli.png" style="padding-right: 10px">3. Re:CSS基础学习笔记可以的  空闲的时候看看--浪子彭三少</li>
						<li><img width="20px" height="20px" src="images/juli.png" style="padding-right: 10px">4. Re:CSS基础学习笔记花了不少时间吧  这么长的博客--TrendY</li></li>
						<li><img width="20px" height="20px" src="images/juli.png" style="padding-right: 10px">5. Re:java Pattern和Matcher详解不错，总结的很到位！--控球强迫症
						<li><img width="20px" height="20px" src="images/juli.png" style="padding-right: 10px">6. Re:Java SE 8 的流库学习笔记哈哈，《Java核心技术》摘选--弗兰克的猫</li>
						<li><img width="20px" height="20px" src="images/juli.png" style="padding-right: 10px">7. Re:CSS基础学习笔记可以的  空闲的时候看看--浪子彭三少</li>
					</ul>
				<br>
				</div>
			</div>
			<div class="right">
				<div class="section2">
					<div class="biaoti2">
						<h3>最新日志</h3>
					</div>
					<div class="a">
						<h4>SpingBoot —— 多线程</h4>
					</div>
					<span class="b">
						<h4>2018-12-1</h4>
					</span>
					<br>
					<div class="title">
						<p>Spring 通过任务执行器（TaskExecutor）来实现多线程和并发编程。使用ThreadPoolTaskExecutor可实现一个基于线程池的TaskExecutor。而实际开发中任务一般是非阻塞的，即异步的，所有我们在配置类中通过@EnableAsync开启对异步任务的支持，并通过在实际执行的Bean的方法中使用@Async注解来声明其是一个异步任务。</p>
					</div>
					<div class="a">
						<h4>SpingBoot —— 计划任务</h4>
					</div>
					<span class="b">
						<h4>2018-12-2</h4>
					</span>
					<br>
					<div class="title">
						<p>Spring 通过任务执行器（TaskExecutor）来实现多线程和并发编程。使用ThreadPoolTaskExecutor可实现一个基于线程池的TaskExecutor。而实际开发中任务一般是非阻塞的，即异步的，所有我们在配置类中通过@EnableAsync开启对异步任务的支持，并通过在实际执行的Bean的方法中使用@Async注解来声明其是一个异步任务。</p>
					</div>
						<div class="a">
						<h4>文件上传</h4>
					</div>
					<span class="b">
						<h4>2018-12-3</h4>
					</span>
					<br>
					<div class="title">
						<p>文件上传的作用例如网络硬盘！就是用来上传下载文件的。在招聘网上填写一个完整的简历还需要上传照片等。文件上传对页面的要求上传文件的要求比较多，需要记一下：必须使用表单，而不能是超链接；表单的method必须是POST，而不能是GET；表单的enctype必须是multipart/form-data；在表单中添加file表单字段.</p>
					</div>
				</div>
			</div>
		</div>
		<footer>
			<p>copyright&copy;2018 济南职业学院 designed by 40刘明哲</p>
		</footer>
	</div>
</body>
</html>
