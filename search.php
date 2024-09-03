<?php get_header() ?>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/home.css" />
<?php
$s = get_search_query();
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
    's' => $s,
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => 20,
    'paged' => $paged
);
// The Query
$the_query = new WP_Query($args); ?>

<div class="container-actualites">
    <div class="container-header-center">
        <div class="container-header-actu">
            <h2 id="titre-actu">Actualités</h2>
            <div class="container-search">
                <?= get_search_form() ?>
            </div>
        </div>
    </div>

    <div class="container-all-actu">
        <div class="ajax-load-more-wrap">
            <?php
            if ($the_query->have_posts()) {
                _e("<h3 class='title-result'>Résultat de recherche pour: " . get_query_var('s') . "</h3>");
                while ($the_query->have_posts()) {
                    $the_query->the_post();
            ?>
                    <li>
                        <a href="<?php the_permalink(); ?>">
                            <article>
                                <figure>
                                    <?php
                                    if (has_post_thumbnail()) {
                                        $thumbnail_id = get_post_thumbnail_id(get_the_ID());
                                        $thumbnail_title = get_the_title($thumbnail_id); ?>
                                        <img src="<?= get_the_post_thumbnail_url(get_the_ID(), 'full') ?>" alt="<?= esc_attr($thumbnail_title) ?>">
                                    <?php    }
                                    ?>
                                </figure>
                                <div class="content-actu">

                                    <h2><?= the_title(); ?></h2>
                                    <p>
                                        <?= the_excerpt(); ?>
                                    </p>
                                    <p class="date"><?php echo get_the_date('d.m.Y'); ?></p>
                                </div>
                            </article>
                        </a>
                    </li>
                <?php
                } ?>
            <?php
            } else {
            ?>
                <h3 class='title-result'>Aucun Article trouvé</h3>
                <div class="alert alert-info">
                    <p>Désoler mais il semblerait qu'il n'existe aucun article disponible à ce nom à l'heure actuel.</p>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<?php get_footer() ?>