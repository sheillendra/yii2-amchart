<?php

namespace sheillendra\amcharts\assets;

use yii\web\AssetBundle;

class AmchartsGanttAsset extends AssetBundle {
    public $sourcePath = '@bower/amcharts3/amcharts';
    public $js = [
        'gantt.js'
    ];
    public $depends = [
        'sheillendra\amcharts\assets\AmchartsAsset'
    ];
}
