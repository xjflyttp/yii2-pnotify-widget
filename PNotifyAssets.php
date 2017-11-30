<?php

namespace xj\pnotify;

use Yii;
use yii\web\AssetBundle;

class PNotifyAssets extends AssetBundle {

    public $sourcePath = '@vendor/xj/yii2-pnotify-widget/assets';
    public $js = ['pnotify.custom.min.js'];
    public $css = ['pnotify.custom.min.css'];
    public $depends = ['yii\web\JqueryAsset'];

}
