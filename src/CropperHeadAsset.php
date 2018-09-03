<?php

namespace coldlook\cropper;


use yii\web\AssetBundle;
use yii\web\View;

/**
 * @author jilikun <jilikun@gmail.com>
 */
class CropperHeadAsset extends AssetBundle
{
    public $sourcePath = '@coldlook/cropper/assets';
    public $jsOptions = ['position' => View::POS_HEAD];
    public $css = [
        'cropper.css',
    ];
    public $js = [
        'cropper.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}