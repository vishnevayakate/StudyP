<?php



use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>
<?php $form = ActiveForm::begin(['layout' => 'horizontal',]); ?>

<!--Для построения HTML-формы представление использует мощный виджет ActiveForm. 
//Методы begin() и end() выводят открывающий и закрывающий теги формы. Между 
//этими вызовами создаются поля ввода при помощи метода field(). 
//Первым идёт поле для "name", вторым — для "email".    -->

    <?= $form->field($model, 'name')?>
    <?= $form->field($model, 'email')?>

<div class="form-group">   
    <?= Html::submitButton('Отправить', ['class'=>'btn btn-primary']) ?>
    
</div>
<!-- Далее для генерации кнопки отправки данных вызывается метод yii\helpers\Html::submitButton(). -->
<?php $Form = ActiveForm::end(); ?>
 
