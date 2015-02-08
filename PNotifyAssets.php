<?php

namespace xj\pnotify;

use Yii;
use yii\web\AssetBundle;

class PNotifyAssets extends AssetBundle {

    public $sourcePath;
    public $basePath = '@webroot/assets';
    public $publishOptions = ['forceCopy' => YII_DEBUG];
    public $js = ['pnotify.custom.min.js'];
    public $css = ['pnotify.custom.min.css'];
    public $depends = ['yii\web\JqueryAsset'];

    public function init() {
        $this->sourcePath = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'assets';
        return parent::init();
    }

}
