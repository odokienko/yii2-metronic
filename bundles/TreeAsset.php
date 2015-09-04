<?php

/**
 * @copyright Copyright (c) 2015 Evgen Odokienko
 * @license https://github.com/odokienko/license/
 */

namespace odokienko\metronic\bundles;

use yii\web\AssetBundle;

class TreeAsset extends AssetBundle {

    /**
     * @var string source path
     */
    public $sourcePath = '@odokienko/metronic/assets';

    /**
     * @var array CSS
     */
    public $css = [
        'global/plugins/jstree/dist/themes/default/style.min.css',
    ];
    public $js = [  
        'global/plugins/jstree/dist/jstree.min.js',
    ];
    
    /**
     * @var array depends on
     */
    public $depends = [
        'odokienko\metronic\bundles\CoreAsset',
    ];

}
