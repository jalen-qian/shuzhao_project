<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Post */

$this->title = '梦笔生花';
//$this->params['breadcrumbs'][] = ['label' => '首页', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-create">

    <h1><?= Html::encode('分享文章') ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
