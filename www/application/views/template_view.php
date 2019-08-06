<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<title>Тест</title>
		<link rel="stylesheet" type="text/css" href="/css/style.css" />
	</head>
	<body>
		<div id="wrapper">
			<div id="header">
				 <div>
					<a href="/">Шапка</span></a>
				</div> 
				<div id="menu">
					<ul>
						<li class="first active"><a href="/">Главная</a></li>
						<li><a href="/services">Cтраница 1</a></li>
						<li><a href="/portfolio">Страница 2</a></li>
						<li class="last"><a href="/contacts">Страница 3</a></li>
					</ul>
					<br class="clearfix" />
				</div>
			</div>
			<div id="page">
				<!-- <div id="sidebar">
					<div class="side-box">
						<h3>Основное меню</h3>
						<ul class="list">
							<li class="first "><a href="/">Главная</a></li>
							<li><a href="/services">Страница1</a></li>
							<li><a href="/portfolio">Страница 2</a></li>
							<li class="last"><a href="/contacts">Страница 3</a></li>
						</ul>
					</div>
				</div> -->


				<div id="content">
					<div class="box">
						<?php include 'application/views/'.$content_view; ?>
					</div>
					<br class="clearfix" />
				</div>


				<br class="clearfix" />
			</div>
			
		</div>





		<div id="footer">
			<a href="/">Подвал</a>
		</div>
	</body>
</html>