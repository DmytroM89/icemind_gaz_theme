<?php
/**
Template name: Home
*/

get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <?php $image = get_field('image');?>
        <?php if (!empty($image)) : ?>
            <div class="mainSlider">
                <div class="mainSlider__item"
                     style="background-image: url('<?php echo $image; ?>')">
                </div>
            </div>
        <?php endif; ?>

        <div class="welcome">
            <div class="container">
                <div class="row">
                    <div class="col-lg-offset-6 col-xs-12 col-sm-12 col-md-12 col-lg-6">
                        <div class="content">
                            <?php the_field('welcome'); ?>
                            <a href="#" class="btn btn__detail" role="button">Докладніше про нас
                                <span class="arrow">
                                    <svg width="44" height="14">
                                        <use xlink:href="#arrow-right" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
            $advantages = get_field('advantages');
            if ($advantages) : ?>
            <?php $cnt = count($advantages); $half = $cnt/2-1; ?>
            <div class="advantages">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <h3 class="advantages__title">
                                <?php echo __('[:ru]Наши преимущества[:en]Our advantages[:ua]Наші переваги'); ?>
                            </h3>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                            <div class="row">
                                <?php foreach ($advantages as $key => $adv): ?>
                                    <?php if ($key <= $half) : ?>
                                    <div class="col-xs-6 col-sm-6 col-md-12 col-lg-12">
                                        <div class="advantages__tile">
                                            <div class="advantages__icon">
                                                <?php echo wp_get_attachment_image($adv['icon']) ?>
                                            </div>
                                            <h5 class="advantages__name">
                                                <?php echo $adv['title'] ?>
                                            </h5>
                                            <p class="advantages__text">
                                                <?php echo $adv['text'] ?>
                                            </p>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                            <div class="advantages__imgbox">
                                <div class="advantages__img"></div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                            <div class="row">
                                <?php foreach ($advantages as $key => $adv): ?>
                                    <?php if ($key > $half) : ?>
                                        <div class="col-xs-6 col-sm-6 col-md-12 col-lg-12">
                                            <div class="advantages__tile">
                                                <div class="advantages__icon">
                                                    <?php echo wp_get_attachment_image($adv['icon']) ?>
                                                </div>
                                                <h5 class="advantages__name">
                                                    <?php echo $adv['title'] ?>
                                                </h5>
                                                <p class="advantages__text">
                                                    <?php echo $adv['text'] ?>
                                                </p>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <?php if (have_rows('clients')) : ?>
            <div class="clients" id="clients">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <h3 class="clients__title">
                                <?php echo __('[:ru]Наши клиенты[:en]Our clients[:ua]Наші клієнти'); ?>
                            </h3>
                            <hr>
                        </div>
                        <div class="col-xs-12">
                            <div class="js_clients">
                                <?php while (have_rows('clients')) : the_row(); ?>
                                    <div>
                                        <div class="clients__image">
                                            <?php echo wp_get_attachment_image(get_sub_field('image')) ?>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>


    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>