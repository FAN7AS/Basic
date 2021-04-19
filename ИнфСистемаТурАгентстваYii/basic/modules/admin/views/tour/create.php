<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Tour */

$this->title = 'Добавить Запись';
$this->params['breadcrumbs'][] = ['label' => 'Экскурсии', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tour-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
