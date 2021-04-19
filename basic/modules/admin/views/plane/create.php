<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Plane */

$this->title = 'Добавить запись';
$this->params['breadcrumbs'][] = ['label' => 'Самолёты', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="plane-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
