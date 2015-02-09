<?php

namespace xj\pnotify;

use Yii;
use yii\web\AssetBundle;

class PNotifyHelperAssets extends AssetBundle {

    public $sourcePath;
    public $basePath = '@webroot/assets';
    public $publishOptions = ['forceCopy' => YII_DEBUG];
    public $js = ['pnotify.helper.js'];
    public $css = [];
    public $depends = ['xj\pnotify\PNotifyAssets'];

    public function init() {
        $this->sourcePath = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'assets';
        return parent::init();
    }

}
