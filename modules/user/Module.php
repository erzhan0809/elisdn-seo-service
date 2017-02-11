<?php

namespace app\modules\user;

use yii\console\Application as ConsoleApplication;

/**
 * user module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'app\modules\user\controllers';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        if (\Yii::$app instanceof ConsoleApplication) {
            $this->controllerNamespace = 'app\modules\user\commands';
        }
    }
}
