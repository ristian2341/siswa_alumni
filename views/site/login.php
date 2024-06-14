<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */
/** @var app\models\LoginForm $model */

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;

$this->title = 'Login';
// $this->params['breadcrumbs'][] = $this->title;
?>

<div class="container-fluid">
    <?php $form = ActiveForm::begin([
        'id' => 'login-form'
    ]); ?>
    
        <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
        <?= $form->field($model, 'password')->textInput(); ?>

        <!-- <?//= $form->field($model, 'rememberMe')->checkbox(['template' => "<div class=\"offset-lg-1 col-lg-3 custom-control custom-checkbox\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",]) ?> -->

        <div class="form-group">
            <div class="offset-lg-1 col-lg-11">
                <?= Html::submitButton('Login&nbsp;<i class="glyphicon glyphicon-search"></i>', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>
        </div>

    <?php ActiveForm::end(); ?>
    
</div>

<script>
$(document).ready(function(){
	$("body").off("click","[data-button=\"plain_text\"]").on("click","[data-button=\"plain_text\"]", function(e){
		e.preventDefault();
		$("#loginform-password").toggleClass("open-text");
		if($("#loginform-password").hasClass("open-text")){
			$("#loginform-password").attr("type", "text");
			$(".glyphicon-eye-open").removeClass("glyphicon-eye-open").addClass("glyphicon-eye-close");
		} else{
			$("#loginform-password").attr("type", "password");
			$(".glyphicon-eye-close").removeClass("glyphicon-eye-close").addClass("glyphicon-eye-open");
		}
	});
});
</script>
