<?php

/*
 * Yii2 asset for PaulZi Form JS library
 *
 * @link      https://github.com/hiqdev/yii2-asset-paulzi-form
 * @package   yii2-asset-paulzi-form
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015, HiQDev (https://hiqdev.com/)
 */

namespace hiqdev\assets\paulziform;

/**
 * Asset bundle for PaulZi Form JS library.
 */
class PaulZiFormAsset extends \yii\web\AssetBundle
{
    /**
     * {@inheritdoc}
     */
    public $sourcePath = '@bower/paulzi-form';

    /**
     * {@inheritdoc}
     */
    public $js = [
        'paulzi-form.min.js',
    ];

    /**
     * {@inheritdoc}
     */
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
