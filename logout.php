<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
	<?
    session_start();
    header('Content-type:text/html;charset=utf-8');
    if(isset($_SESSION['user'])){
            session_unset();//free all session variable
            session_destroy();//销毁一个会话中的全部数据
            setcookie(session_name(),'',time()-1800);//销毁与客户端的卡号
            header('location:skip.php?url=index.php')or die("失败！");
        }else{
            header('location:skip.php?url=index.php');
        }
?>
</body>
</html>