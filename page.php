<?php get_header(); ?>

<?php if (have_posts()) while (have_posts()) : the_post(); ?>

    <div class="bContent <?php if (is_page(29)) : ?>linear__bg<?php endif; ?>">
        <div class="container">
            <?php if (is_page(29)) : ?>
                <div class="row">
                    <div class="col-xs-12">
                        <h1 class="bContent__title">
                            <?php the_title(); ?>
                        </h1>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-lg-4">
                        <div class="bContent__map">
                            <div id="map" class="map"></div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-lg-8">
                        <div class="bContent__contacts">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="contacts">
                                        <div class="row">
                                            <div class="col-xs-12 col-md-4">
                                                <div class="contacts__icon">
                                                    <svg width="20" height="20">
                                                        <use xlink:href="#marker" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                                    </svg>
                                                    <h6><?php echo __('[:ru]Адрес[:en]Adderss[:ua]Адреса'); ?></h6>
                                                </div>
                                                <p>
                                                    <?php the_field('address', 'options') ?>
                                                </p>
                                            </div>
                                            <div class="col-xs-12 col-md-4">
                                                <div class="contacts__icon">
                                                    <svg width="20" height="20">
                                                        <use xlink:href="#phone" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                                    </svg>
                                                    <h6><?php echo __('[:ru]Телефоны[:en]Phone[:ua]Телефони'); ?></h6>
                                                </div>
                                                <p>
                                                    <?php the_field('phone', 'options') ?>
                                                </p>
                                                <p>
                                                    <?php the_field('phone-2', 'options') ?>
                                                </p>
                                            </div>
                                            <div class="col-xs-12 col-md-4">
                                                <div class="contacts__icon">
                                                    <svg width="20" height="20">
                                                        <use xlink:href="#mail" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                                    </svg>
                                                    <h6>E-mail</h6>
                                                </div>
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
                                <div class="col-xs-12">
                                    <div class="contacts__box">
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
                    </div>
                </div>


            <?php else : ?>
                <div class="col-xs-12">
                    <div class="content">
                        <?php the_content(); ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>

<?php endwhile; ?>

<?php get_footer(); ?>