<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Airport */

$this->title = 'Добавить запись';
$this->params['breadcrumbs'][] = ['label' => 'Аэропорты', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="airport-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
