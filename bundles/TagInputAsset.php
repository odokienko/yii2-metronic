<?php
/**
 * @copyright Copyright (c) 2015 Evgen Odokienko
 * @license https://github.com/odokienko/license/
 */

namespace odokienko\metronic\bundles;

use yii\web\AssetBundle;

/**
 * SpinnerAsset for spinner widget.
 */
class TagInputAsset extends AssetBundle {

    public $sourcePath = '@odokienko/metronic/assets';
    public $js = [
        'global/plugins/jquery-tags-input/jquery.tagsinput.min.js',
    ];
    public $css = [
        'global/plugins/jquery-tags-input/jquery.tagsinput.css',
    ];
    public $depends = [
        'odokienko\metronic\bundles\CoreAsset',
    ];

}