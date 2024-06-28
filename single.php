<?php get_header() ?>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/single.scss" />
<div class="container-pink"></div>
<div class="container-post">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <article>

                <div class="post">
                    <div class="header-post">
                        <figure>
                            <?php
                            if (has_post_thumbnail()) {
                                $thumbnail_id = get_post_thumbnail_id(get_the_ID());
                                $thumbnail_title = get_the_title($thumbnail_id); ?>
                                <img src="<?= get_the_post_thumbnail_url(get_the_ID(), 'full') ?>" alt="<?= esc_attr($thumbnail_title) ?>">
                            <?php    }
                            ?>
                        </figure>
                        <?php the_title('<h1 class="post-title">', '</h1>'); ?>
                    </div>


                    <div class="post-content">
                        
                        <?php the_content(); ?>
                    </div>

                    <div class="post-content-para" id="div-date">
                        <p class="post-info">
                            Publié le <?php echo get_the_date('d.m.Y'); ?>
                        </p>
                    </div>
                </div>
            </article>

        <?php endwhile; ?>
    <?php endif; ?>
</div>
</div>
<?php get_footer() ?>