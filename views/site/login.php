<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */
/** @var app\models\LoginForm $model */

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;

$this->title = 'Login';
?>
<style>
    .gradient-custom {
        /* fallback for old browsers */
        background: #6a11cb;

        /* Chrome 10-25, Safari 5.1-6 */
        background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
    }
   
</style>
<section class="vh-100" style="background-color: #424242;">
    <div class="container py-6 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card shadow-2-strong" style="border-radius: 1rem;">
            <div class="card-body p-6 mx-md-4">
                <div class="text-center">
                    <img src="<?= (!empty($setting->logo) ? $setting->logo : '') ?>" style="width: 185px;" alt="logo">
                    <h4 class="mt-1 mb-5 pb-1"><?= (!empty($setting->instansi) ? $setting->instansi : '') ?></h4>
                </div>
                <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                    <p>Please login to your account</p>
                    <div data-mdb-input-init class="form-outline mb-4">
                        <?= $form->field($model, 'username')->textInput(['autofocus' => true,'autocomplete' => 'off']) ?>
                    </div>

                    <div data-mdb-input-init class="form-outline mb-4">
                        <?= $form->field($model, 'password')->passwordInput(['autocomplete' => 'off']); ?>
                    </div>
                    <!-- Checkbox -->
                    <!-- <div class="form-check d-flex justify-content-start mb-4"> -->
                    <!-- <input class="form-check-input" type="checkbox" value="" id="form1Example3" /> -->
                    <!-- <label class="form-check-label" for="form1Example3"> Remember password </label> -->
                    <!-- </div> -->
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary btn-block fa-lg gradient-custom-2 mb-3', 'name' => 'login-button']) ?>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>