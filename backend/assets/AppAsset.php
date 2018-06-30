<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        //'css/site.css',
        'css/font-awesome.min.css',
        'vendors/elegant-icon/style.css',
        'vendors/themify-icon/themify-icons.css',
        'css/bootstrap.min.css',
        'vendors/revolution/css/settings.css',
        'vendors/revolution/css/layers.css',
        'vendors/revolution/css/navigation.css',
        'vendors/animate-css/animate.css',
        'vendors/owl-carousel/owl.carousel.min.css',
        'css/style.css',
        'css/responsive.css',
        'css/font-awesome.min.css',
        'vendors/elegant-icon/style.css',
        'vendors/themify-icon/themify-icons.css',
        'css/bootstrap.min.css',
        'vendors/revolution/css/settings.css',
        'vendors/revolution/css/layers.css',
        'vendors/revolution/css/navigation.css',
        'vendors/animate-css/animate.css',
        'vendors/owl-carousel/owl.carousel.min.css',
        'css/style.css',
        'css/responsive.css',
    ];
    public $js = [
        'js/jquery-3.2.1.min.js',
        'js/popper.min.js',
        'js/bootstrap.min.js',
        'vendors/revolution/js/jquery.themepunch.tools.min.js',
        'vendors/revolution/js/jquery.themepunch.revolution.min.js',
        'vendors/revolution/js/extensions/revolution.extension.actions.min.js',
        'vendors/revolution/js/extensions/revolution.extension.video.min.js',
        'vendors/revolution/js/extensions/revolution.extension.slideanims.min.js',
        'vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js',
        'vendors/revolution/js/extensions/revolution.extension.navigation.min.js',
        'vendors/revolution/js/extensions/revolution.extension.slideanims.min.js',
        'vendors/counterup/jquery.waypoints.min.js',
        'vendors/counterup/jquery.counterup.min.js',
        'vendors/counterup/apear.js',
        'vendors/counterup/countto.js',
        'vendors/owl-carousel/owl.carousel.min.js',
        'vendors/parallaxer/jquery.parallax-1.1.3.js',
        'vendors/tweet/tweetie.min.js',
        'vendors/tweet/script.js',
        'js/theme.js',
    ];
    public $depends = [
        //'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
