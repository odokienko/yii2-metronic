<?php

/**
 * @copyright Copyright (c) 2015 Evgen Odokienko
 * @license https://github.com/odokienko/license/
 */

namespace odokienko\metronic\bundles;

use yii\web\AssetBundle;

/**
 * DateRangePickerAsset for dateRangePicker widget.
 */
class DateRangePickerAsset extends AssetBundle {

    public $sourcePath = '@odokienko/metronic/assets';
    public $js = [
        'plugins/bootstrap-daterangepicker/moment.min.js',
        'plugins/bootstrap-daterangepicker/daterangepicker.js',
    ];
    public $css = [
        'plugins/bootstrap-daterangepicker/daterangepicker-bs3.css',
        'plugins/bootstrap-datetimepicker/css/datetimepicker.css',
    ];
    public $depends = [
        'odokienko\metronic\bundles\CoreAsset',
    ];

}
