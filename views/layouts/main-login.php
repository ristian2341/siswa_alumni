<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\helpers\Html;
use yii\helpers\Url;

// modal setting //
use app\models\Setting;
$setting = Setting::find()->where(['id_setting' => 1])->one();

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
<meta charset="<?= Yii::$app->charset ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?= Html::csrfMetaTags() ?>
		<title>Login Form [<?= $setting->instansi ?>]</title>
        <link rel="shortcut icon" href="<?php echo Yii::$app->request->baseUrl."/". $setting->icon; ?>" type="image/x-icon" />
		<?php $this->head() ?>
</head>
<body >
    
    <?php $this->beginBody() ?>
	<div class="login-wrapper">		
        <div class="login-container">
			<div class="login-logoimg"></div>
			<?= Alert::widget() ?>
			<?= $content ?>
		</div>
	</div>
        <!-- <main role="main" class="flex-shrink-0">
            <div class="container">
                <?//= Breadcrumbs::widget([
                    //'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                //]) ?>
                <?//= Alert::widget() ?>
                <?//= $content ?>
            </div>
        </main> -->

        <!-- <footer class="footer mt-auto py-3 text-muted">
            <div class="container">
                <p class="float-left">&copy; My Company <?= date('Y') ?></p>
                <p class="float-right"><?= Yii::powered() ?></p>
            </div>
        </footer> -->

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

<script>
    $(document).ready(function(){
        
    });
</script>

