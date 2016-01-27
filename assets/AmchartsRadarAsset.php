<?php

namespace sheillendra\amcharts\assets;

use yii\web\AssetBundle;

class AmchartsRadarAsset extends AssetBundle {
    public $sourcePath = '@bower/amcharts3/amcharts';
    public $js = [
        'radar.js'
    ];
    public $depends = [
        'sheillendra\amcharts\assets\AmchartsAsset'
    ];
}
