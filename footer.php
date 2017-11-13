    <?php if (!is_page(29)) : ?>
    <div class="bContacts">
            <div class="container">
                <div class="row top-xs">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="bContacts__logo">
                            <div class="img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="logo">
                            </div>
                            <div class="text">
                                <?php echo __('[:ru]ООО «АТИЛЛА ЭНЕРДЖИ[:en]«ATILLA ENERGY»[:ua]ТОВ «АТІЛЛА ЕНЕРДЖІ»'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="row">
                            <div class="bContacts__col col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-4">
                                <h6>
                                    <?php echo __('[:ru]звоните[:en]call[:ua]телефонуйте'); ?>
                                </h6>
                                <p>
                                    <?php the_field('phone', 'options') ?>
                                </p>
                                <p>
                                    <?php the_field('phone-2', 'options') ?>
                                </p>
                            </div>
                            <div class="bContacts__col col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-4">
                                <h6>
                                    <?php echo __('[:ru]пишите[:en]write[:ua]пишіть'); ?>
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
                            <div class="bContacts__col col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-4">
                                <h6>
                                    <?php echo __('[:ru]офис[:en]office[:ua]офіс'); ?>
                                </h6>
                                <p>
                                    <?php the_field('address', 'options') ?>
                                </p>
                            </div>
                            <div class="bContacts__copyright col-xs-12">
                                <hr>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                        <p>&copy; 2016 <?php echo __('[:ru]Все права защищены[:en]All rights reserved[:ua]Всі права захищені'); ?></p>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                        <p class="link"><?php echo __('[:ru]Разработка сайта[:en]The development of the site[:ua]Розробка сайту'); ?> <a href="http://astudio.ck.ua/" target="_blank"><?php echo __('[:ru]Веб студия "Astudio"[:en]Web Studio "Astudio"[:ua]Веб студія "Astudio"'); ?></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <?php else : ?>
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <p class="footer__copyright">&copy; 2016 <?php echo __('[:ru]Все права защищены[:en]All rights reserved[:ua]Всі права захищені'); ?></p>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <p class="footer__link"><?php echo __('[:ru]Разработка сайта[:en]The development of the site[:ua]Розробка сайту'); ?> <a href="http://astudio.ck.ua/" target="_blank"><?php echo __('[:ru]Веб студия "Astudio"[:en]Web Studio "Astudio"[:ua]Веб студія "Astudio"'); ?></a></p>
                    </div>
                </div>
            </div>
        </footer>
    <?php endif; ?>




    </div>

    <?php wp_footer(); ?>

    <div id="modal" class="m-popup mfp-hide">
        <div class="m-popup__header">

        </div>
        <div class="m-popup__body">

        </div>
    </div>

    <div class="cd-panel cd-panel--menu from-left">
        <div class="cd-panel-container--black">
            <header class="cd-panel-header">
                <a href="#0" class="cd-panel-close">Закрыть</a>
            </header>
            <div class="cd-panel-content">

                <div class="cd-panel__lang">
                    <?php dynamic_sidebar('lang') ?>
                </div>

                <div class="cd-panel__menu">
                    <?php wp_nav_menu("menu=main_menu"); ?>
                </div>

            </div>
        </div>
    </div>

    <div class="cd-panel cd-panel--form from-right">
        <div class="cd-panel-container--white">
            <header class="cd-panel-header">
                <a href="#0" class="cd-panel-close">Закрыть</a>
            </header>
            <div class="cd-panel-content">

            </div>
        </div>
    </div>

</body>
</html>