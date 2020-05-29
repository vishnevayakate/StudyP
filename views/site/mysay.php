
<!-- часть на html. Начало-->
<!DOCTYPE html>
<html lang="ru">
    <head>
	    <link rel="stylesheet" href="css/main.css">		<!-- подключаем CSS с названием main.css -->
		<meta charset='utf-8'>
        <title>DataTimeProject</title>
    </head>
	
	<body>	
	<!--	<p class="red_text">Текущее время, полученное средствами PHP:<br /></p>		<!-- вот на эту строку подействует style.css --> 
		<div class="red_text">Текущее время, полученное средствами PHP:   </div>		<!-- вот на эту строку подействует style.css --> 

	    <p class="red_text">Запускаем скрипт на php:</p>		<!--применяем к этой строке html разметку css (изменение цвета текста)-->
		<p id="php_time" class="red_text"	>
			<?php											//начало php кода в html документе. Даже комментарий другого формата, обратили вниамние?
				require_once "php_time.php";				//запуск php скрипта посредством его вызова 
			?>												<!-- конец php. Комментарий опять другого формата-->		
		</p>	
		<p class="green_text">Текущее время, полученное средствами JS: </p>		<!-- вот на эту строку подействует style.css --> 
		
		<p class="green_text">Запускаем скрипт на JS:</p>		<!--применяем к этой строке html разметку css (изменение цвета текста)-->
		
		<div id="js_time" class="green_text"></div>
			<script src="js/js_time.js">
				
			<!-- конец php. Комментарий опять другого формата-->

			<p class="red_text"	>
				<?php											//начало php кода в html документе. Даже комментарий другого формата, обратили вниамние?
					require_once "php_time.php";				//запуск php скрипта посредством его вызова 
				
				?>												<!-- конец php. Комментарий опять другого формата-->					
		        </p>

			
			</script>
		
    </body>	
</html>
<!-- часть на html. Конец-->
