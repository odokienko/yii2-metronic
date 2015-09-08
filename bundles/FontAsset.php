<?php
/**
 * @copyright Copyright (c) 2015 Evgen Odokienko
 * @license https://github.com/odokienko/license/
 */

namespace odokienko\metronic\bundles;

use yii\web\AssetBundle;

class FontAsset extends AssetBundle
{
    public $sourcePath = '@odokienko/metronic/assets';

    public $css = [
        'http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all',
//        'global/plugins/font-awesome/css/font-awesome.min.css',
        'global/plugins/simple-line-icons/simple-line-icons.css',
    ];
}
