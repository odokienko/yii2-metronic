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
class NotificationAsset extends AssetBundle
{
    public $sourcePath = '@odokienko/metronic/assets';
    public $js = [
        'plugins/bootstrap-toastr/toastr.min.js',
    ];

    public $css = [
        'plugins/bootstrap-toastr/toastr.min.css',
    ];

    public $depends = [
        'odokienko\metronic\bundles\CoreAsset',
    ];
}
