<?php
use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
?>
       <div class="alert alert-success">
          Лабораторная работа №3.
        </div>
        <?php  echo Html::a(' Авторизация ' , ['site/login'], ['class' => 'btn btn-primary block']) ?>