<?php

namespace sheillendra\amcharts\assets;

use yii\web\AssetBundle;

class AmchartsGaugeAsset extends AssetBundle {
    public $sourcePath = '@bower/amcharts3/amcharts';
    public $js = [
        'gauge.js'
    ];
    public $depends = [
        'sheillendra\amcharts\assets\AmchartsAsset'
    ];
}
