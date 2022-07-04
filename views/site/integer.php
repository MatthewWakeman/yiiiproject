<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */
/** @var app\models\ContactForm $model */

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;
use yii\captcha\Captcha;

$this->title = 'Integer Calculator';
$this->params['breadcrumbs'][] = $this->title;
?>

<?php if (! isset($answer)) { ?>

<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>
</div>

<?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

    <?= $form->field($model, 'value') ?>

    <div class="form-group">
        <?= Html::submitButton('Calculate', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
    </div>

<?php ActiveForm::end(); ?>
<?php } else { ?>
    <h1><?= $answer ?></h1>
<?php } ?>