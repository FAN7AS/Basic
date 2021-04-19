<?php
use yii\helpers\Html;
?>
<p>Вы ввели следующую информацию:</p>
<ul>
    <li><label>Name</label>: <?= Html::encode($model->name) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->email) ?></li>
     <li><label>Email</label>: <?= Html::encode($model->date) ?></li>
       <li><label>Email</label>: <?= Html::encode($model->age) ?></li>
         <li><label>Email</label>: <?= Html::encode($model->favkitchen) ?></li>
          <li><label>Email</label>: <?= Html::encode($model->choice) ?></li>
           <li><label>Email</label>: <?= Html::encode($model->textarea) ?></li>
</ul>


