<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>留言管理</title>
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
			  		<li><a href="index_root.php">首页</a></li>
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
						<h3>最新日志</h3>
			</div>
	<?
	require("conn.php");  //连接mysql数据库
	
	$result=mysql_query("select * from lyb order by ID desc",$conn);  //创建结果集
	//留言分页
	if(isset($_GET["page"])&&$_GET["page"]>0)//获取要显示分页的页码
	$page=$_GET["page"];
	else
	$page=1;//如果获取不到页码就显示第一页
	$pagesize=4;//设置每页显示的记录数
	$recordcount=mysql_num_rows($result);
	$pagecount=ceil($recordcount / $pagesize);//计算总页数
	$result=mysql_query("select * from lyb limit ".($page -1)*$pagesize.",".$pagesize,$conn);//获取第几页的记录		
?>
		<p>共有<?= mysql_num_rows($result)?>条记录 <a href='selectform.php'>搜索留言</a>
			 <a href="addform.php">添加留言</a></p>
			
		<? 
	while($row=mysql_fetch_assoc($result)){
		?>
		<div class="liuyan">
			<p class="title"><? echo $row["title"]?></p>
			<img src="images/<?=$row["sex"]?>.gif">
			<p class="right">
			作者：<? echo $row["author"]?><br>
			内容：<? echo $row["content"]?><br>
			发表时间：<? echo $row["addtime"]?><br>
			来自：<? echo $row["IP"]?><br>
			<a href="delete.php?id=<?=$row["ID"] ?>" onClick="return confirm('确定要删除吗？')">删除</a>
				
			<br>
            <td>
			<form method="post" action="editform.php?id=<?=$row["ID"]?>">
                	<input type="submit" name="gengxin" value="编辑留言">
			</form>
            </td>
			</p>
		</div>
			<? }?>
	<br><br><br>
		<div class="fenye">	
			<!--通过超链接转到要显示的页面-->
<? 
	if($page==1)	//如果是首页的话则不显示首页的超链接
		echo "首页  上一页  ";
	else
		echo "<a href='?page=1'>首页</a> <a href='?page=".($page -1)."'> 上一页</a> ";//如果显示的不是首页，则首页和上一页应为超链接并传递相应的页码值
		for($i=1;$i<$pagecount;$i++){		//循环设置数字页码的链接
			if($i==$page)
				echo "$i    ";					//如果是某页则不显示某页的超链接
			else
				echo"<a href='?page=$i'>$i </a> ";
	}
	if($page==$pagecount)//若是最后一页则不显示下一页和末页
		echo "下一页   末页 ";
	else
		//若不是最后一页则显示下一页超链接
		echo "<a href='?page=".($page +1)."'>下一页</a> <a href='?page=$pagecount'> 末页</a>" ;		
		echo "&nbsp; &nbsp; 共".$recordcount."条留言";
		echo "&nbsp; $page / $pagecount 页";
?>
		</div>
		</div>
	
		<footer>
			<p>copyright&copy;2018 济南职业学院 designed by 40刘明哲</p>
		</footer>
	</div>
</body>
</html>
