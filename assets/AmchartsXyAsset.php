<?php

namespace sheillendra\amcharts\assets;

use yii\web\AssetBundle;

class AmchartsXyAsset extends AssetBundle {
    public $sourcePath = '@bower/amcharts3/amcharts';
    public $js = [
        'xy.js'
    ];
    public $depends = [
        'sheillendra\amcharts\assets\AmchartsAsset'
    ];
}
