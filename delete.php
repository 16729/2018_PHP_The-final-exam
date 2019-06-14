<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>删除记录</title>
</head>

<body>
<?php
	require("conn.php");
	//删除记录
	$id=$_GET["id"];//获取glshydelall.php传递来的ID参数
	$sql="delete from lyb where ID=$id";
	if(mysql_query($sql) &&mysql_affected_rows()==1){
		echo "<script>alert('删除成功！');
		      location.href='glshydelall_root.php';
			  </script>";
	}
	else {
		echo "<script>alert('删除失败！');
		      location.href='glshydelall_root.php';
			  </script>";
	}

?>
</body>
</html>