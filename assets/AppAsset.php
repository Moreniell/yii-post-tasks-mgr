<?php

namespace app\assets;

use yii\web\AssetBundle;


/**
 * Main application asset bundle.
 *
 * @author Ivanchenko Andrey <ivanchenko.andrey.d@ukr.net>
 * @since 1.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
        [
            'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css',
            'integrity' => 'sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm',
            'crossorigin' => 'anonymous'
        ],
        [
            'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css',
            'crossorigin' => 'anonymous'
        ],
        'css/main.css',
    ];
    public $js = [
        [
            'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js',
            'integrity' => 'sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q',
            'crossorigin' => 'anonymous'
        ],
        [
            'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js',
            'integrity' => 'sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl',
            'crossorigin' => 'anonymous'
        ],
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}
