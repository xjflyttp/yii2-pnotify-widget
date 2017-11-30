<?php

namespace xj\pnotify;

use Yii;
use yii\web\AssetBundle;

class PNotifyHelperAssets extends AssetBundle {

    public $sourcePath = '@vendor/xj/yii2-pnotify-widget/assets';
    public $js = ['pnotify.helper.js'];
    public $depends = ['xj\pnotify\PNotifyAssets'];

}
