<?php
namespace componentsforyii2\webupload;
use yii\web\AssetBundle;
class YsWebuploaderAsset extends AssetBundle
{
    public $sourcePath = '@vendor/componentsforyii2/webupload/dist';
    public $css = [
        'style.css'
    ];
    public $js = [
    	'uploader.js',
    	'cropper.js'
    ];
    public $depends = [
    	'webuploader'=>'componentsforyii2\webupload\WebuploaderAsset',
    	'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'yuanshuai\yscomponents\webuploader\CropperAsset'
    ];
}