<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>留言搜索</title>
	<link href="style/guanli.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div id="container1">
		<header>
			<div class="logo">
				<marquee loop="-1" scrollamount="3">欢迎来到我的博客~</marquee>
			</div>
			<div class="menu">
				<ul>
			  		<li><a href="index.php">首页</a></li>
					<li><a href="#">相册</a></li>
					<li><a href="#">音乐</a></li>
					<li><a href="#">日常随笔</a></li> 
					<li><a href="#">联系</a></li> 
					<li><a href="#">订阅</a></li> 
					<li><a href="glshydelall.php">留言</a></li> 
				</ul>
			</div>
		</header>
		<div class="content1">
				<div class="biaoti2">
						<h3>添加留言</h3>
			</div>
			<h2 align="center">请您在下面填写留言</h2>
    <form method="post" action="insert.php" style="margin-left: 275px;">
    	<table width="400" border="1" align="center" cellpadding="2">		
        	<tr>
            	<td width="125">留言标题：</td>
                <td width="275"><input type="text" name="title">*</td>
            </tr>
            <tr>
            	<td width="125">留言者：</td>
                <td width="275"><input type="text" name="author">*</td>
            </tr>
            <tr>
            	<td width="125">留言者邮箱：</td>
                <td width="275"><input type="text" name="Email">*</td>
            </tr>
            <tr>
            	<td width="125">留言内容：</td>
                <td ><textarea name="content" cols="30" rows="5"></textarea></td>
            </tr>
            <tr>
            	<td>&nbsp;</td>
                <td><input type="submit" name="submit" value="提交">*</td>
            </tr>
        </table>
    </form>
	
		</div>
		<footer>
			<p>copyright&copy;2018 济南职业学院 designed by 40刘明哲</p>
		</footer>
	</div>
</body>
</html>
