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
class ModalAsset extends AssetBundle
{
    public $sourcePath = '@odokienko/metronic/assets';
    public $js = [
        'global/plugins/bootstrap-modal/js/bootstrap-modalmanager.js',
        'global/plugins/bootstrap-modal/js/bootstrap-modal.js',
    ];

    public  $css = [
        'global/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css',
        'global/plugins/bootstrap-modal/css/bootstrap-modal.css',
    ];

    public $depends = [
        'odokienko\metronic\bundles\CoreAsset',
    ];
}
