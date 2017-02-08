<?php
use yii\helpers\Html;
$this->title = Yii::t('app','TITLE_PROFILE');
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="user-profile">


    <p>
        <?= Html::a(Yii::t('app', 'LINK_UPDATE_PROFILE'), ['update'], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'LINK_PASSWORD_CHANGE'), ['password-change'], ['class' => 'btn btn-primary']) ?>
    </p>
    <?= \yii\widgets\DetailView::widget([
        'model'=>$model,
        'attributes'=>[
            'username',
            'email',
        ],
    ])?>
</div>
