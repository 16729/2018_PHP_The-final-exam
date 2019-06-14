<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<meta charset="utf-8">
        <meta http-equiv="refresh" content="2,URL=<?php echo $_GET['url'] ?>"/>
        <title>正在跳转中...</title>
</head>

<body>
	<?php
    if(!isset($_GET['url']) || !isset($_GET['info'])){
        exit();
    }
?>
 <div><?php echo $_GET['info'] ?></div>
</body>
</html>
