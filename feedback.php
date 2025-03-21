<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/styles_feedback.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
	<title>Оперативники Caliber</title>
</head>
<body>
	<header>
		<a href="index.html" id="logo">
			Оперативники Caliber
		</a>
		<div id="header_links">
			<a href="https://playcaliber.com/ru/" id="header_buy_button">
				Играть
			</a>
			<a href="feedback.html" id="header_feedback_button">
				Оставить отзыв
			</a>
		</div>
	</header>

	<div id="form">
		<span id="title">
			Оставьте отзыв или пожелание
		</span>
		<form name="feedback_form" method="post" action="feedback.php">
			<input type="text" name="sirname" id="sirname" placeholder="Введите имя" class="input" required>
			<input type="text" name="email" id="email" placeholder="Введите адрес электронной почты" class="input">
			<textarea name="message" id="message" placeholder="Введите сообщение" class="input" required></textarea>
			<input type="submit" name="send" id="send" value="ОТПРАВИТЬ">
		</form>
	</div>
	
	<?php
		$name = $_REQUEST["sirname"]; 
		$email = $_REQUEST["email"];
		$text_message = $_REQUEST["message"];

		$link = mysqli_connect("localhost", "root", "");
  		mysqli_select_db($link, "mybase");

  		$sql = "INSERT INTO mytable VALUES ('$name', '$email', '$text_message')";
		$result=mysqli_query($link, $sql);
		
		$sql="SELECT name, email, message FROM mytable";
		$result=mysqli_query($link, $sql);

		
		while ($line=mysqli_fetch_row($result)) {
			echo "<b style='font-weight: 500; font-size: 20pt; margin-left: 150px;'>Имя: </b>"."<span style='font-weight: 500; font-size: 20pt; margin-left: 10px;'>$line[0]</span>"."<br>";
			echo "<b style='font-weight: 500; font-size: 20pt; margin-left: 150px;'>Email: </b>"."<span style='font-weight: 500; font-size: 20pt; margin-left: 10px;'>$line[1]</span>"."<br>";
			echo "<b style='font-weight: 500; font-size: 20pt; margin-left: 150px;'>Сообщение: </b>"."<span style='font-weight: 500; font-size: 20pt; margin-left: 10px;'>$line[2]</span>"."<br><br>";
		}

   ?>
	
	<div id="info">
		<div id="info_column1">
			<div class="info_elems">
				<img src="source/geo_logo.png" style="height: 72px; margin-top: 12px;">
				<div class="info_elems_elems">
					<span class="info_elems_title">
						МЕСТО РАСПОЛОЖЕНИЯ
					</span>
					<span class="info_elems_text">
						г. Москва, ул. Бутлерова, дом 3
					</span>
				</div>
			</div>
			<div class="info_elems">
				<img src="source/time_logo.png" style="height: 68px; margin-top: 12px; margin-right: 10px;">
				<div class="info_elems_elems">
					<span class="info_elems_title">
						РАБОЧИЕ ЧАСЫ
					</span>
					<span class="info_elems_text" style="margin-top: 15px">
						ПН. - ПТ. 10:00
					</span>
				</div>
			</div>
		</div>
		<div id="info_column2">
			<div class="info_elems">
				<img src="source/phone_logo_1.png" style="height: 75px; margin-top: 10px; margin-right: 10px;">
				<div class="info_elems_elems">
					<span class="info_elems_title">
						ПОЗВОНИТЕ НАМ
					</span>
					<span class="info_elems_text">
						+7-999-999-99-99
					</span>
				</div>
			</div>
		</div>
	</div>

   <!-- <script type="text/javascript">
   	$("button_reference").click(function(){
   		alert("Обращение отправлено!");
	});
   </script> -->

	<footer>
		<div id="footer_column1">
			<span id="footer_logo">
				7miracles
			</span>
			<span id="footer_adress">
				117485, г. Москва,<br>
				ул. Бутлерова, дом 3
			</span>
		</div>
		<div id="footer_column2">
			<span id="footer_column2_title">
				Связаться с нами
			</span>
			<div id="footer_links">
				<div id="footer_links_column1">
					<img src="source/vk_logo.png" class="footer_icon">
					<img src="source/tg_logo.png" class="footer_icon">
					<img src="source/phone_logo.png" class="footer_icon">
				</div>
				<div id="footer_links_column2">
					<a href="feedback" class="footer_links_text" style="margin-top: 45px">ссылка</a>
					<a href="feedback" class="footer_links_text" style="margin-top: 53px">ссылка</a>
					<span class="footer_links_text" style="margin-top: 57px">+7-999-999-99-99</span>
				</div>
			</div>
		</div>
	</footer>
</body>
</html>