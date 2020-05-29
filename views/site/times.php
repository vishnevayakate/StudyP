
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

		<p id="php_time"	>
			<?php											//начало php кода в html документе. Даже комментарий другого формата, обратили вниамние?
				//require_once "php_time.php";				
                                echo $currTime;
			?>												<!-- конец php. Комментарий опять другого формата-->		
		</p >	
		<p class="green_text">Текущее время, полученное средствами JS: </p>		<!-- вот на эту строку подействует style.css --> 
		
		<div id="js_time" ></div>
			<script src="js/js_time.js">				
			</script>
                        
 		<div class="orange_text">Новое присвоенное время:   </div>		<!-- вот на эту строку подействует style.css --> 
			<?php											//начало php кода в html документе. Даже комментарий другого формата, обратили вниамние?
				//require_once "php_time.php";				
                                echo $currTime;
			?>												<!-- конец php. Комментарий опять другого формата-->		             
		
    </body>	
</html>
<!-- часть на html. Конец-->
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

