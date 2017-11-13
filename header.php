<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <meta http-equiv="Cache-Control" content="public">
    <meta http-equiv="Cache-Control" content="no-store">
    <meta http-equiv="Cache-Control" content="max-age=34700">

    <meta name="format-detection" content="telephone=no">

    <title>
        <?php // Генерируем тайтл в зависимости от контента с разделителем " | "
            wp_title('|', true, 'right');
        ?>
    </title>

    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>

    <style type="text/css">
        #page-preloader {
            position: fixed;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            width: 100vw;
            height: 100vh;
            background: #fff;
            z-index: 100500;
        }

        #page-preloader .spinner {
            width: 270px;
            height: 175px;
            position: absolute;
            left: 50%;
            top: 50%;
            margin: -87px 0 0 -135px;
            color: #FFF;
            text-align: center;
        }
    </style>

</head>
<body ontouchstart="" <?php body_class($class); ?>>

<div id="page-preloader">
            <span class="spinner">
                <svg width="270" height="175">
                    <use xlink:href="#logo"></use>
                </svg>
            </span>
</div>

<!-- load combined svg file (with symbols) into body-->
<script>
    (function (doc) {
        var scripts = doc.getElementsByTagName('script');
        var script = scripts[scripts.length - 1];
        var xhr = new XMLHttpRequest();
        xhr.onload = function () {
            var div = doc.createElement('div');
            div.innerHTML = this.responseText;
            div.style.display = 'none';
            script.parentNode.insertBefore(div, script)
        };
        xhr.open('get', '<?php echo get_template_directory_uri(); ?>/assets/img/sprites.svg', true);
        xhr.send()
    })(document)
</script>

<div class="wrapper">

    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-xs-10">
                        <p class="header__contacts">
                            <span>
                                <svg width="14" height="14">
                                    <use xlink:href="#phone" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                </svg>
                                <?php the_field('phone', 'options') ?>
                            </span>
                            <span>
                                <svg width="14" height="14">
                                    <use xlink:href="#mail" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                </svg>
                                <a href="mailto:<?php the_field('email', 'options') ?>">
                                    <?php the_field('email', 'options') ?>
                                </a>
                            </span>
                            <span>
                                <svg width="14" height="14">
                                    <use xlink:href="#marker" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                </svg>
                                <?php the_field('address', 'options') ?>
                            </span>
                        </p>
                    </div>
                    <div class="col-xs-2">
                        <div class="header__lang">
                            <?php echo qtranxf_getLanguageNameNative(); ?>
                            <?php dynamic_sidebar('lang') ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	    <div class="header__bottom">
            <div class="header__box">
                <div class="row">
                    <div class="col-xs-4">
                        <a href="<?php echo get_home_url(); ?>" class="header__logo">
                            <div class="row middle-xs">
                                <div class="img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="logo">
                                </div>
                                <div class="text">
                                    <?php echo __('[:ru]ООО «АТИЛЛА ЭНЕРДЖИ[:en]«ATILLA ENERGY»[:ua]ТОВ «АТІЛЛА ЕНЕРДЖІ»'); ?>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-8">
                        <div class="header__menu">
                            <?php wp_nav_menu("menu=main_menu"); ?>
                        </div>
                        <a href="#" class="header__menuBtn">
                            <svg width="34" height="34">
                                <use xlink:href="#menu" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
	    </div>
    </header>
