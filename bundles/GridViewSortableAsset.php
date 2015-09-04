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
class GridViewSortableAsset extends AssetBundle {

    public $sourcePath = '@odokienko/metronic/assets';

    /**
     * @var array JS
     */
    public $js = [
        'global/scripts/sortable.gridview.js',
    ];

    /**
     * @var array depends
     */
    public $depends = [
        'yii\jui\JuiAsset',
    ];

}
