<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link href="styles/site.css" rel="stylesheet">
    <title>Онлайн магазин</title>
</head>
<body>
	<header>
		<div class="container">
			<div class="header">
			</div>
			<!--сделано выравнивание по флекс технологии 15.02.2018 -->
			<!--убрана горизонтальная прокрутка 16.02.2018 -->
			<ul class="menu">
			<!--домашнее задание третьего урока -->
			<?php
				$menu = [
					'main' => '<li>Главная</li>',   
					'Catalogue' => '<li><a href="catalogue.html">Каталог</a></li>',   
					'Contacts' => '<li><a href="contacts.html">Контакты</a></li>' 
				];
				foreach($menu as $key => $item)
				{
					echo "$item";				
				}	
			?>
			</ul>		 
		</div>
	</header>
		<div class="center">
			<h1>Интернет-магазин по продаже книг</h1>
			<p>Добро пожаловать в наш Интернет-магазин, где вы найдете широкий выбор книг!</p>	
			<img class="imagesize" src="images/Britanica.jpg" alt="Британика"/>
			<img class="imagesize" src="images/art.jpg" alt="Искусство"/>	
			<img class="imagesize" src="images/pushkin.png" alt="Книги Пушкина"/>
			<img class="imagesize" src="images/zamech.png" alt="Жизнь замечательных людей"/>
		</div>	
	</div>	
	<footer>
	<div class="footer"> 	
			<!--добавлены пиктограммы соцсетей 15.02.2018 -->
			<!--пиктограмма по всему сайту прижата к низу окна браузера 16.02.2018 -->
			<div class="social">
				<a href="#"></a>
				<a href="#"></a>
				<a href="#"></a>
				<a href="#"></a>			
			</div>	
			<div class="footer_text"><span>Все права защищены</span>
			<!--домашнее задание второго урока -->
			<?php
			$current_year = date ( 'Y' );
			echo "© SiteName.ru 2017-".$current_year; 
			?>
			</div>
		</div>		
</footer>
</body>
</html>