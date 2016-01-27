<?php

namespace sheillendra\amcharts\assets;

use yii\web\AssetBundle;

class AmchartsAsset extends AssetBundle {
    public $sourcePath = '@bower/amcharts3/amcharts';
    public $js = [
        'amcharts.js'
    ];
}
