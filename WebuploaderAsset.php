<?php
namespace componentsforyii2\webupload;
use yii\web\AssetBundle;
class WebuploaderAsset extends AssetBundle
{
    public $sourcePath = '@vendor/bower/fex-webuploader/dist';
    public $css = [
        'webuploader.css'
    ];
    public $js = [
    	'webuploader.min.js'
    ];
    public $swf = 'Uploader.swf';
}