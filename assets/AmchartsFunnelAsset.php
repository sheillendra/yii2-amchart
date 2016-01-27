<?php

namespace sheillendra\amcharts\assets;

use yii\web\AssetBundle;

class AmchartsFunnelAsset extends AssetBundle {
    public $sourcePath = '@bower/amcharts3/amcharts';
    public $js = [
        'funnel.js'
    ];
    public $depends = [
        'sheillendra\amcharts\assets\AmchartsAsset'
    ];
}
