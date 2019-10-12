<?php

namespace borales\extensions\phoneInput;

use yii\web\AssetBundle;

/**
 * Asset Bundle of the phone input widget. Registers required CSS and JS files.
 * @package borales\extensions\phoneInput
 */
class PhoneInputAsset extends AssetBundle
{
    /** @var string */
    public $sourcePath = '@bower/intl-tel-input/build';
    /** @var array */
    public $css = ['css/intlTelInput.min.css'];
    /** @var array */
    public $js = [
        'js/utils.js',
        'js/intlTelInput-jquery.min.js',
    ];
    /** @var array */
    public $depends = ['yii\web\JqueryAsset'];
}
