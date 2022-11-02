<?php 
/* use yii\helpers\Html;
use yii\widgets\ActiveForm; */
use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

?>
    <?php if($mensaje){
        echo Html::tag('div',Html::encode($mensaje),['class'=>'alert alert-success']);
    }
?>

<?php $formulario = ActiveForm::begin();?>
<div class="col-md-6">
    <?=  $formulario->field($model,'valora')->label('Numero uno:') ?>
</div>
<div class="col-md-6">
    <?=  $formulario->field($model,'valorb')->label('Numero dos:') ?>
</div>
<br>
<div class="form-group">
    <?= Html::submitButton('Enviar',['class'=>'btn btn-primary']) ?>
</div>

<?php ActiveForm::end();?>