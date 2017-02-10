<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 09.02.2017
 * Time: 22:08
 */

namespace app\modules\admin\components\grid;


class ActionColumn extends \yii\grid\ActionColumn
{
    public $contentOptions = [
        'class'=> 'action-column',
    ];
}