    <?php if (!is_page(29)) : ?>
    <div class="bContacts">
        <div class="container">
            <div class="row between-xs">
                <div class="bContacts__col col">
                    <div class="bContacts__icon">
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
                <div class="bContacts__sep col"></div>
                <div class="bContacts__col col">
                    <div class="bContacts__icon">
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
                <div class="bContacts__sep col"></div>
                <div class="bContacts__col col">
                    <div class="bContacts__icon">
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
    <?php endif; ?>


    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <p class="footer__copyright">&copy; <?php echo __('[:ru]Все права защищены[:en]All rights reserved[:ua]Всі права захищені'); ?> 2017</p>
                </div>
                <div class="col-xs-12 col-md-6">
                    <p class="footer__link"><?php echo __('[:ru]Разработка сайта[:en]The development of the site[:ua]Розробка сайту'); ?> <a href="http://astudio.ck.ua/" target="_blank"><?php echo __('[:ru]Веб студия Астудио[:en]Web Studio Astudio[:ua]Веб студія Астудио'); ?></a></p>
                </div>
            </div>
        </div>
    </footer>

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