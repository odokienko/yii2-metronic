<?php

/**
 * @link https://github.com/odokienko/
 * @copyright Copyright (c) 2015 Evgen Odokienko
 * @license https://github.com/odokienko/license/
 */

namespace odokienko\metronic\bundles;

use yii\web\AssetBundle;
use odokienko\metronic\Metronic;

class ThemeAsset extends AssetBundle {

    /**
     * @var string source assets path
     */
    public $sourcePath = '@odokienko/metronic/assets/admin/{version}';

    /**
     * @var array depended bundles
     */
    public $depends = [
        'odokienko\metronic\bundles\CoreAsset',
        'odokienko\metronic\bundles\StyleBasedAsset',
    ];

    /**
     * @var array css assets
     */
    public $css = [
        'css/layout.css',
        'css/themes/{theme}.css',
        'css/custom.css',
    ];

    /**
     * @var array js assets
     */
    public $js = [
        'scripts/layout.js',
//        'scripts/app.js',
//        'scripts/init.js',
    ];

    /**
     * Inits bundle
     */
    public function init()
    {
        $this->_handleSourcePath();

        $this->_handleDynamicCss();

        \Yii::$app->controller->view->registerJs(<<<"JS4"
            Metronic.init(); // init metronic core componets
            Layout.init(); // init layout
JS4
        , \yii\web\View::POS_END);

        return parent::init();
    }

    /**
     * Parses source path
     */
    private function _handleSourcePath()
    {
        Metronic::getComponent()->parseAssetsParams($this->sourcePath);
    }

    /**
     * Parses dynamic css
     */
    private function _handleDynamicCss()
    {
        array_walk($this->css, array(Metronic::getComponent(), 'parseAssetsParams'));
    }

}
