<?php
/**
 * @copyright Copyright (c) 2015 Evgen Odokienko
 * @license https://github.com/odokienko/license/
 */

namespace  odokienko\metronic\bundles;

use yii\web\AssetBundle;

/**
 * SpinnerAsset for spinner widget.
 */
class Select2Asset extends AssetBundle
{
    public $sourcePath = '@odokienko/metronic/assets';
    public $js = [
        'global/plugins/select2/select2.min.js',
    ];

    public $css = [
        'global/plugins/select2/select2.css',
        'global/plugins/select2/select2-bootstrap.css',
    ];


    public $depends = [
        'odokienko\metronic\bundles\CoreAsset',
    ];
}
