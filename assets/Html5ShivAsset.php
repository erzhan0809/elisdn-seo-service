<?php
/**
 * Created by PhpStorm.
 * User: Yerzhan
 * Date: 07.02.2017
 * Time: 22:14
 */

namespace app\assets;


use yii\web\AssetBundle;
use yii\web\View;

class Html5ShivAsset extends AssetBundle
{
    public $sourcePath = '@bower/html5shiv/dist';
    public $js = [
        'html5shiv.min.js',
    ];
    public $jsOptions = [
        'condition'=>'lt IE 9',
        'position' => View::POS_HEAD,
    ];
}