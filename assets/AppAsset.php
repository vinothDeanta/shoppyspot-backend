<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/vendors/icofont.css',
        'css/vendors/themify.css',
        'css/vendors/flag-icon.css',
        'css/vendors/feather-icon.css',
        'css/vendors/scrollbar.css',
        'css/style.css',
        'css/vendors/animate.css',
        'css/vendors/chartist.css',
        'css/vendors/icofont.css',
        'css/vendors/owlcarousel.css',
        'css/vendors/prism.css',
        'css/vendors/bootstrap.css',
        'css/color-1.css',
        'css/responsive.css',
    ];
    public $js = [
        'js/jquery-3.5.1.min.js',
        '/js/bootstrap/bootstrap.bundle.min.js',
        'js/icons/feather-icon/feather.min.js',
        'js/icons/feather-icon/feather-icon.js',
        'js/scrollbar/simplebar.js',
        'js/scrollbar/custom.js',
        'js/config.js',
        'js/sidebar-menu.js',
        'js/chart/chartjs/chart.min.js',
        'js/chart/chartist/chartist.js',
        'js/chart/chartist/chartist-plugin-tooltip.js',
        'js/chart/apex-chart/apex-chart.js',
        'js/chart/apex-chart/stock-prices.js',
        'js/prism/prism.min.js',
        'js/counter/jquery.waypoints.min.js',
        'js/counter/jquery.counterup.min.js',
        'js/counter/counter-custom.js',
        'js/owlcarousel/owl.carousel.js',
        'js/owlcarousel/owl-custom.js',
        'js/dashboard/dashboard_2.js',
        'js/tooltip-init.js',
        'js/script.js',
        'js/theme-customizer/customizer.js'
    ];
    public $depends = [
        // 'yii\web\YiiAsset',
        // 'yii\bootstrap4\BootstrapAsset',
    ];
}
