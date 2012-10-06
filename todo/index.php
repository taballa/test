<?php

require "connect.php";
require "todo.class.php";


// 查询菜单表
$query = mysql_query("SELECT * FROM `tz_todo` ORDER BY `position` ASC");

$todos = array();

// 将每个菜单项对象存入数组

while($row = mysql_fetch_assoc($query)){
	$todos[] = new ToDo($row);
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>使用ajax+jquery+php创建即时编辑的菜单</title>

<!-- Including the jQuery UI Human Theme -->
<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/themes/humanity/jquery-ui.css" type="text/css" media="all" />

<!-- Our own stylesheet -->
<link rel="stylesheet" type="text/css" href="styles.css" />

</head>

<body>

<h1>使用ajax+jquery+php创建即时编辑的菜单</h1>
<div id="main">

	<ul class="todoList">
		
        <?php
		
		//循环显示菜单项 
		foreach($todos as $item){
			echo $item;
		}
		
		?>

    </ul>

<a id="addButton" class="green-button" href="#">添加菜单项</a>

</div>

<!-- 这是用于删除前弹出框的提示层 -->
<div id="dialog-confirm" title="你确定想要删除该菜单项？">你确定想要删除该菜单项？</div>


<!-- Including our scripts -->

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
<script type="text/javascript" src="script.js"></script>

</body>
</html>
