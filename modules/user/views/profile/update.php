<?php

/* @var $this yii\web\View */
/* @var $model app\modules\user\models\User */

use yii\widgets\ActiveForm;
$this->title = Yii::t('app','TITLE_PROFILE_UPDATE');

$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'TITLE_PROFILE'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="user-profile-update">

    <h1><?= \yii\helpers\Html::encode($this->title)?></h1>

   <?php $form = ActiveForm::begin() ?>

    <?= $form->field($model,'email')->input('email',['maxlength'=>255]) ?>
    
    <div class="form-group">
        <?= \yii\helpers\Html::submitButton(Yii::t('app', 'BUTTON_SAVE'),['class'=>'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end()?>
</div>
