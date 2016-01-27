<?php

namespace sheillendra\amcharts\assets;

use yii\web\AssetBundle;

class AmchartsPieAsset extends AssetBundle {
    public $sourcePath = '@bower/amcharts3/amcharts';
    public $js = [
        'pie.js'
    ];
    public $depends = [
        'sheillendra\amcharts\assets\AmchartsAsset'
    ];
}
