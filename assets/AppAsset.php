<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'plugins/bootstrap/bootstrap.min.css',
        'plugins/font-awesome/css/font-awesome.min.css',
        'plugins/icofont/css/icofont.css',
        'plugins/datatables/css/jquery.dataTables.min.css',
        'plugins/toastr/build/toastr.min.css',
        'css/styles.css'
    ];
    public $js = [
        'js/jquery-3.1.0.js',
        'plugins/bootstrap/bootstrap.min.js',
        'js/angular.js',
        'plugins/datatables/js/jquery.dataTables.min.js',
        'plugins/toastr/build/toastr.min.js',
        'js/angular/first.js',
        'js/angular/controllers/trabajadores.js'
    ];
    public $depends = [
        'yii\web\YiiAsset'
    ];
}
