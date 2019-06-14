<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>更新留言</title>
</head>

<body>
<?
	require("conn.php");
	$id=$_GET["id"];  //获取修改记录的ID值
	$sql="select * from lyb where ID=$id";  //获取待更新的记录
	$result=mysql_query($sql,$conn);
	$row=mysql_fetch_assoc($result);//将待更新记录存入数组中
?>
	<h2 align="center">更新留言</h2>
    <form method="post" action="edit.php?id=<?=$row["ID"]?>">
    	<table width="400" border="1" align="center" cellpadding="2">		
        	<tr>
            	<td width="125">留言标题：</td>
                <td width="275"><input type="text" name="title" value="<?=$row["title"]?>">*</td>
            </tr>
            <tr>
            	<td width="125">留言者：</td>
                <td width="275"><input type="text" name="author" value="<?=$row["author"]?>">*</td>
            </tr>
            <tr>
            	<td width="125">留言者邮箱：</td>
                <td width="275"><input type="text" name="Email" value="<?=$row["Email"]?>">*</td>
            </tr>
            <tr>
            	<td width="125">留言内容：</td>
                <td >
				<textarea name="content" cols="30" rows="5">
                <?=$row["content"]?>
                </textarea>
				</td>
            </tr>
            <tr>
            	<td>&nbsp;</td>
                <td><input type="submit" name="submit" value="提交">*</td>
            </tr>
        </table>
    </form>
	
</body>
</html>







