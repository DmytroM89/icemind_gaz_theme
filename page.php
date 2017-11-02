<?php get_header(); ?>

<?php if (have_posts()) while (have_posts()) : the_post(); ?>

    <div class="bContent">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="bContent__title">
                        <?php the_title(); ?>
                    </h1>
                </div>
                <?php if (is_page(29)) : ?>

                    <div class="contacts">
                        <div class="container">
                            <div class="row between-xs">
                                <div class="col-xs-6 col-md-3">
                                    <div class="contacts__icon">
                                        <svg width="25" height="25">
                                            <use xlink:href="#marker" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                        </svg>
                                    </div>
                                    <h6>
                                        <?php echo __('[:ru]Адрес[:en]Adderss[:ua]Адреса'); ?>
                                    </h6>
                                    <p>
                                        <?php the_field('address', 'options') ?>
                                    </p>
                                </div>
                                <div class="col-xs-6 col-md-3">
                                    <div class="contacts__icon">
                                        <svg width="25" height="25">
                                            <use xlink:href="#phone" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                        </svg>
                                    </div>
                                    <h6>
                                        <?php echo __('[:ru]Телефоны[:en]Phone[:ua]Телефони'); ?>
                                    </h6>
                                    <p>
                                        <?php the_field('phone', 'options') ?>
                                    </p>
                                    <p>
                                        <?php the_field('phone-2', 'options') ?>
                                    </p>
                                </div>
                                <div class="col-xs-6 col-md-3">
                                    <div class="contacts__icon">
                                        <svg width="25" height="25">
                                            <use xlink:href="#schedule" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                        </svg>
                                    </div>
                                    <h6>
                                        <?php echo __('[:ru]График работы[:en]Schedule[:ua]Графік роботи'); ?>
                                    </h6>
                                    <p>
                                        <?php the_field('schedule', 'options') ?>
                                    </p>
                                </div>
                                <div class="col-xs-6 col-md-3">
                                    <div class="contacts__icon">
                                        <svg width="25" height="25">
                                            <use xlink:href="#mail" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                        </svg>
                                    </div>
                                    <h6>
                                        E-mail
                                    </h6>
                                    <p>
                                        <a href="mailto:<?php the_field('email', 'options') ?>">
                                            <?php the_field('email', 'options') ?>
                                        </a>
                                    </p>
                                    <p>
                                        <a href="mailto:<?php the_field('email-1', 'options') ?>">
                                            <?php the_field('email-2', 'options') ?>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php else : ?>


                    <div class="col-xs-12">
                        <?php if (get_the_post_thumbnail()) : ?>
                            <div class="bContent__image">
                                <?php the_post_thumbnail('thumb2') ?>
                            </div>
                        <?php endif; ?>
                        <div class="content <?php if (get_the_post_thumbnail()) : ?>padding<?php endif; ?>">
                            <?php the_content(); ?>
                        </div>
                    </div>


                <?php endif; ?>
            </div>
        </div>
    </div>

    <?php if (is_page(29)) : ?>
    <div class="contacts__box">
        <div id="map" class="map"></div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-6">
                    <div class="form">
                        <div class="bContent__title">
                            <?php echo __('[:ru]Форма обратной связи[:en]Feedback form[:ua]Форма зворотнього зв\'язку'); ?>
                        </div>
                        <?php
                        $lang = qtranxf_getLanguage();
                        if ($lang == 'ru') {
                            echo do_shortcode('[contact-form-7 id="4" title="form ru"]');
                        } elseif ($lang == 'ua') {
                            echo do_shortcode('[contact-form-7 id="47" title="form ua"]');
                        } else {
                            echo do_shortcode('[contact-form-7 id="46" title="form en"]');
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>

<?php endwhile; ?>

<?php get_footer(); ?>