
<!-- часть на html. Начало-->
<!DOCTYPE html>
<html lang="ru">
    <head>
	    <link rel="stylesheet" href="css/main.css">		<!-- подключаем CSS с названием main.css -->
		<meta charset='utf-8'>
        <title>servertime</title>
    </head>

    <body>	
	<?php
       echo $message;  // + $time1;
       echo "<br/>";
       echo $time1;
   
      //  use yii\helpers\Html;
        
        ?>
          <?//= Html::encode($message, $time1) ?>
    </body>	
</html>
<!-- часть на html. Конец-->
