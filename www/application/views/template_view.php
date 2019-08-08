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
					<a class="in_row" href="/">Шапка</span></a>

					<?php if($_SESSION['login'] == ''){?>
						<a class="in_coll" href="/registration">Регистрация</a>
						<a class="in_coll" href="/login">Авторизация</a>
					<?php } else { ?>
						<div style="border:1px solid black; display:inline-block;">
							<p class="in_row" style="color:red; margin:0px;"><?php echo $_SESSION['login'];?></p>
							<p class="in_row" style="color:red; margin:0px;"><?php echo $_SESSION['admin'];?></p>
						</div>
							<br>
							<a href="/user" style="color:green;">Панель администратора</a>
							<a href="/logout">Выход</a>
					<?php }?>

				</div>
				<div id="menu">
					<ul>
						<li class="first active"><a href="/">Главная</a></li>
						<li><a href="/services">Ознакомление</a></li>
						<li><a href="/list">Список</a></li>
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
