<?php

namespace sheillendra\amcharts\assets;

use yii\web\AssetBundle;

class AmchartsSerialAsset extends AssetBundle {
    public $sourcePath = '@bower/amcharts3/amcharts';
    public $js = [
        'serial.js'
    ];
    public $depends = [
        'sheillendra\amcharts\assets\AmchartsAsset'
    ];
}
