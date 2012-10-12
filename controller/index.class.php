<!DOCTYPE HTML>
<html lang="zh-CN">
<head>
	<meta charset="UTF-8">
	<meta content="no-cache" http-equiv="Pragma">
	<link rel="stylesheet" href="css/custom.css">
	<script type="text/javascript" src="js/jquery-1.7.2.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<title>jQuery test</title>
</head>
<body>
	<?
	echo "jQuery test";
	?>
	<!-- test 表单 -->
	<form action="" method="get" id='user'>
		<input type="text" name="" id="first-name">
		<input type="text" name="" id="last-name">
		<input type="email" name="" id="">
		<input type="submit" value="Submit">
	</form>

	<!-- test on or live click clone -->
	<div class="container">
		container
		<div class="box">box</div>
		<div class="box-live">box live</div>
	</div>
	<div class="container">
		container
		<div class="box">box</div>
		<div class="box-live">box live</div>
	</div>
	<div class="container">
		container
		<div class="box">box</div>
		<div class="box-live">box live</div>
	</div>
	<div class="container">
		container
		<div class="box">box</div>
		<div class="box-live">box live</div>
	</div>
	<ul>
		<li class='first-li'>first li</li>
		<li class='first-li'>first li</li>
		<li class='first-li'>first li</li>
		<li>
			<ul>
				<li class='last-li'><a href="http://google.com">last li</a> text</li>
				<li class='last-li'><a target="_blank" href="http://mtv.com">last li</a> text</li>
			</ul>
		</li>
		<li class='first-li'>first li</li>
		<li class='first-li'>first li</li>
		<li class='first-li'>first li</li>
		<li class='first-li bottom'>first li</li>
	</ul>
	<!-- 测试 mouseover and mouseenter 的区别 -->
	<div class="container">
		<p>不论鼠标指针穿过被选元素或其子元素，都会触发 mouseover 事件。</p>
		<p>只有在鼠标指针穿过被选元素时，才会触发 mouseenter 事件。</p>
		<div class="over" style="background-color:lightgray;padding:20px;width:40%;float:left">
			<h2 style="background-color:white;">被触发的 Mouseover 事件：<span></span></h2>
		</div>
		<div class="enter" style="background-color:lightgray;padding:20px;width:40%;float:right">
			<h2 style="background-color:white;">被触发的 Mouseenter 事件：<span></span></h2>
		</div>
	</div>

	<!-- 测试 toggle -->
	<a href="#" class="content-link">Show More</a>
	<div class="content">content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content </div>

	<!-- test slide gallery -->
	<div class="slide-gallery">
		<a href="#" class="photo">photo1</a>
		<a href="#" class="photo">photo2</a>
		<a href="#" class="photo">photo3</a>
	</div>

	<!-- test hover -->
	<div class="cart">
		<h2>Shopping Cart</h2>
	</div>
	
	<!-- Other -->
	<div class="my-link">My link --> test click event</div>
	<img src="upload/images/lco_portrait00.jpg" alt="test error event" id="portrait">
	<div class="product">product --> test clone</div>	
	<div class="gallery"><h1>gallery --> test appendTo</h1></div>

	<script type="text/javascript" src="js/something.js"></script>
	<script type="text/javascript" src="js/portrait.js"></script>
	<script type="text/javascript" src="js/form.js"></script>
	<!-- <script type="text/javascript" src="js/unload.js"></script> -->
</body>
</html>
