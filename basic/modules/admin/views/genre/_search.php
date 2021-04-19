<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\genreSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="genre-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'GeID') ?>

    <?= $form->field($model, 'GenreName') ?>

    <?= $form->field($model, 'Description') ?>

    <?= $form->field($model, 'GenreCreator') ?>

    <?= $form->field($model, 'count') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
