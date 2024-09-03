<?php get_header() ?>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/page.css" />
<div class="container-post">
    <?php the_title('<h1 class="post-title">', '</h1>'); ?>
    <div class="wrapper-content">
        <div class="content">
            <?php the_content(); ?>
        </div>
    </div>





</div>
<?php get_footer() ?>