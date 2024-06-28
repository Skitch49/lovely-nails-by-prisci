<?php get_header() ?>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/index.scss" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />

<div class="banniere">
</div>
<div class="container">

    <section class="section-propos">
        <h2>A propos de moi</h2>
        <div class="content-a-propos">
            <?php if (get_field('paragraphe_a_propos_de_moi')) : ?>
                <?= the_field('paragraphe_a_propos_de_moi'); ?>
            <?php endif; ?>
        </div>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const buttons = document.querySelectorAll('.wrapper-btn button');
            const items = document.querySelectorAll('.picture-item');
            const showMoreButton = document.getElementById('show-more');

            function showInitialItems() {
                const groups = ['ete', 'hiver', 'printemps', 'automne'];
                groups.forEach(group => {
                    let count = 0;
                    items.forEach(item => {
                        if (item.getAttribute('data-groups') === group && count < 2) {
                            item.classList.add('show');
                            count++;
                        }
                    });
                });
            }

            function showAllItemsInGroup(group) {
                items.forEach(item => {
                    item.classList.remove('show');
                    if (item.getAttribute('data-groups') === group) {
                        item.classList.add('show');
                    }
                });
            }

            function filterItems(group) {
                let count = 0;
                items.forEach(item => {
                    item.classList.remove('show');
                    if (item.getAttribute('data-groups') === group) {
                        item.classList.add('show');
                        count++;
                    }
                });
                showMoreButton.style.display = 'none';
            }

            buttons.forEach(button => {
                button.addEventListener('click', () => {
                    if (button.classList.contains('active')) {
                        button.classList.remove('active');
                        items.forEach(item => item.classList.remove('show'));
                        showMoreButton.style.display = 'block';

                        showInitialItems(); // Afficher les images initiales si aucun bouton n'est actif
                    } else {
                        buttons.forEach(btn => btn.classList.remove('active'));
                        button.classList.add('active');
                        filterItems(button.getAttribute('data-group'));
                    }
                });
            });

            showMoreButton.addEventListener('click', () => {
                items.forEach(item => item.classList.add('show'));
                showMoreButton.style.display = 'none';
            });

            // Afficher les images initiales par défaut au chargement de la page
            showInitialItems();
        });
    </script>


    <section class="section-gallerie">
        <div class="top-gallerie">
            <h1>Nos prestations</h1>
            <div class="wrapper-btn">
                <button class="btn" data-group="printemps">Printemps</button>
                <button class="btn" data-group="ete">Été</button>
                <button class="btn" data-group="automne">Automne</button>
                <button class="btn" data-group="hiver">Hiver</button>

            </div>
        </div>

        <div id="photo-gallerie">
            <?php if (get_field('image_galerie_printemps_1')) : ?>
                <figure class="picture-item" data-groups="printemps"><img src="<?php the_field('image_galerie_printemps_1'); ?>" alt="<?php pathinfo('image_galerie_printemps_1'); ?>"></figure>
            <?php endif; ?>
            <?php if (get_field('image_galerie_printemps_2')) : ?>
                <figure class="picture-item" data-groups="printemps"><img src="<?php the_field('image_galerie_printemps_2'); ?>" alt="<?php pathinfo('image_galerie_printemps_2'); ?>"></figure>
            <?php endif; ?>
            <?php if (get_field('image_galerie_printemps_3')) : ?>
                <figure class="picture-item" data-groups="printemps"><img src="<?php the_field('image_galerie_printemps_3'); ?>" alt="<?php pathinfo('image_galerie_printemps_3'); ?>"></figure>
            <?php endif; ?>
            <?php if (get_field('image_galerie_printemps_4')) : ?>
                <figure class="picture-item" data-groups="printemps"><img src="<?php the_field('image_galerie_printemps_4'); ?>" alt="<?php pathinfo('image_galerie_printemps_4'); ?>"></figure>
            <?php endif; ?>

            <?php if (get_field('image_galerie_ete_1')) : ?>
                <figure class="picture-item" data-groups="ete"><img src="<?php the_field('image_galerie_ete_1'); ?>" alt="<?php pathinfo('image_galerie_ete_1'); ?>"></figure>
            <?php endif; ?>
            <?php if (get_field('image_galerie_ete_2')) : ?>
                <figure class="picture-item" data-groups="ete"><img src="<?php the_field('image_galerie_ete_2'); ?>" alt="<?php pathinfo('image_galerie_ete_2'); ?>"></figure>
            <?php endif; ?>
            <?php if (get_field('image_galerie_ete_3')) : ?>
                <figure class="picture-item" data-groups="ete"><img src="<?php the_field('image_galerie_ete_3'); ?>" alt="<?php pathinfo('image_galerie_ete_3'); ?>"></figure>
            <?php endif; ?>
            <?php if (get_field('image_galerie_ete_4')) : ?>
                <figure class="picture-item" data-groups="ete"><img src="<?php the_field('image_galerie_ete_4'); ?>" alt="<?php pathinfo('image_galerie_ete_4'); ?>"></figure>
            <?php endif; ?>

            <?php if (get_field('image_galerie_automne_1')) : ?>
                <figure class="picture-item" data-groups="automne"><img src="<?php the_field('image_galerie_automne_1'); ?>" alt="<?php pathinfo('image_galerie_automne_1'); ?>"></figure>
            <?php endif; ?>
            <?php if (get_field('image_galerie_automne_2')) : ?>
                <figure class="picture-item" data-groups="automne"><img src="<?php the_field('image_galerie_automne_2'); ?>" alt="<?php pathinfo('image_galerie_automne_2'); ?>"></figure>
            <?php endif; ?>
            <?php if (get_field('image_galerie_automne_3')) : ?>
                <figure class="picture-item" data-groups="automne"><img src="<?php the_field('image_galerie_automne_3'); ?>" alt="<?php pathinfo('image_galerie_automne_3'); ?>"></figure>
            <?php endif; ?>
            <?php if (get_field('image_galerie_automne_4')) : ?>
                <figure class="picture-item" data-groups="automne"><img src="<?php the_field('image_galerie_automne_4'); ?>" alt="<?php pathinfo('image_galerie_automne_4'); ?>"></figure>
            <?php endif; ?>

            <?php if (get_field('image_galerie_hiver_1')) : ?>
                <figure class="picture-item" data-groups="hiver"><img src="<?php the_field('image_galerie_hiver_1'); ?>" alt="<?php pathinfo('image_galerie_hiver_1'); ?>"></figure>
            <?php endif; ?>
            <?php if (get_field('image_galerie_hiver_2')) : ?>
                <figure class="picture-item" data-groups="hiver"><img src="<?php the_field('image_galerie_hiver_2'); ?>" alt="<?php pathinfo('image_galerie_hiver_2'); ?>"></figure>
            <?php endif; ?>
            <?php if (get_field('image_galerie_hiver_3')) : ?>
                <figure class="picture-item" data-groups="hiver"><img src="<?php the_field('image_galerie_hiver_3'); ?>" alt="<?php pathinfo('image_galerie_hiver_3'); ?>"></figure>
            <?php endif; ?>
            <?php if (get_field('image_galerie_hiver_4')) : ?>
                <figure class="picture-item" data-groups="hiver"><img src="<?php the_field('image_galerie_hiver_4'); ?>" alt="<?php pathinfo('image_galerie_hiver_4'); ?>"></figure>
            <?php endif; ?>
        </div>
        <div class="center-button">

            <button id="show-more" class="btn-more">Afficher plus</button>
        </div>


    </section>


    <?php
    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => 4,
        'order' => 'DESC',
    );

    $loop = new WP_Query($args);

    ?>
    <section class="section-actus" style="background: linear-gradient(to right, rgb(221 205 221), rgb(235 192 228));">
        <div>

            <h2 id="titre-actu">Actualités</h2>
            <div class="container-swiper-actu">
                <div class="swiper swiper-actu">
                    <div class="swiper-wrapper">
                        <?php if (have_posts()) : while ($loop->have_posts()) : $loop->the_post(); ?>
                                <div class="swiper-slide">
                                    <a href="<?php the_permalink(); ?>" class="link-post">
                                        <article>
                                            <figure>
                                                <?php
                                                if (has_post_thumbnail()) { ?>
                                                    <img height="400" width="600" class="img-actu" src="<?= get_the_post_thumbnail_url(get_the_ID(), 'full') ?>" alt="get_the_post_thumbnail_url(get_the_ID(),'full')">
                                                <?php    }
                                                ?>
                                            </figure>
                                            <div class="container-text-actu">

                                                <?php the_title('<h2 class="h2-post">', '</h2>'); ?>
                                                <p>
                                                    <?= the_excerpt(); ?>
                                                </p>
                                                <p class="date"><?php echo get_the_date('d.m.Y'); ?></p>
                                            </div>
                                        </article>
                                    </a>
                                </div>
                        <?php endwhile;
                        endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="my-custom-pagination-div"></div>
        <div class="container-actu-link">
            <a href="../wordpress/actualites" class="actu-link">
                <span>PLUS D'ACTUALITÉS</span>
            </a>
        </div>

    </section>
    <?php wp_reset_postdata(); ?>
    <section class="section-bougie">
        <div class="wrapper-bougie">
            <div class="swiper swiper-bougie">
                <div class="swiper-wrapper">
                    <?php if (get_field('image_bougie_1')) : ?>
                        <div class="swiper-slide"><img src="<?= the_field('image_bougie_1'); ?>" alt="<?php pathinfo('image_bougie_1'); ?>" loading="lazy">
                            <p class="name-card"><?= the_field('titre_bougie_1'); ?></p>
                        </div>
                    <?php endif; ?>
                    <?php if (get_field('image_bougie_2')) : ?>
                        <div class="swiper-slide"><img src="<?= the_field('image_bougie_2'); ?>" alt="<?php pathinfo('image_bougie_2'); ?>" loading="lazy">
                            <p class="name-card"><?= the_field('titre_bougie_2'); ?></p>
                        </div>
                    <?php endif; ?>
                    <?php if (get_field('image_bougie_3')) : ?>
                        <div class="swiper-slide"><img src="<?= the_field('image_bougie_3'); ?>" alt="<?php pathinfo('image_bougie_3'); ?>" loading="lazy">
                            <p class="name-card"><?= the_field('titre_bougie_3'); ?></p>
                        </div>
                    <?php endif; ?>
                    <?php if (get_field('image_bougie_4')) : ?>
                        <div class="swiper-slide"><img src="<?= the_field('image_bougie_4'); ?>" alt="<?php pathinfo('image_bougie_4'); ?>" loading="lazy">
                            <p class="name-card"><?= the_field('titre_bougie_4'); ?></p>
                        </div>
                    <?php endif; ?>
                    <?php if (get_field('image_bougie_5')) : ?>
                        <div class="swiper-slide"><img src="<?= the_field('image_bougie_5'); ?>" alt="<?php pathinfo('image_bougie_5'); ?>" loading="lazy">
                            <p class="name-card"><?= the_field('titre_bougie_5'); ?></p>
                        </div>
                    <?php endif; ?>
                    <?php if (get_field('image_bougie_6')) : ?>
                        <div class="swiper-slide"><img src="<?= the_field('image_bougie_6'); ?>" alt="<?php pathinfo('image_bougie_6'); ?>" loading="lazy">
                            <p class="name-card"><?= the_field('titre_bougie_6'); ?></p>
                        </div>
                    <?php endif; ?>
                    <?php if (get_field('image_bougie_7')) : ?>
                        <div class="swiper-slide"><img src="<?= the_field('image_bougie_7'); ?>" alt="<?php pathinfo('image_bougie_7'); ?>" loading="lazy">
                            <p class="name-card"><?= the_field('titre_bougie_7'); ?></p>
                        </div>
                    <?php endif; ?>
                    <?php if (get_field('image_bougie_8')) : ?>
                        <div class="swiper-slide"><img src="<?= the_field('image_bougie_8'); ?>" alt="<?php pathinfo('image_bougie_8'); ?>" loading="lazy">
                            <p class="name-card"><?= the_field('titre_bougie_8'); ?></p>
                        </div>
                    <?php endif; ?>
                    <?php if (get_field('image_bougie_9')) : ?>
                        <div class="swiper-slide"><img src="<?= the_field('image_bougie_9'); ?>" alt="<?php pathinfo('image_bougie_9'); ?>" loading="lazy">
                            <p class="name-card"><?= the_field('titre_bougie_9'); ?></p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="content-bougie">
                <h2>Vente de bougies</h2>
                <?= the_field('paragraphe_bougie'); ?>
            </div>
        </div>
    </section>



</div>
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script>
    const swiper = new Swiper(".swiper-galerie", {
        navigation: {
            nextEl: ".swiper-button-next-1",
            prevEl: ".swiper-button-prev-1",
        },
        slidesPerView: 4,
        grid: {
            rows: 2,
        },
        spaceBetween: 20,
        breakpoints: {},
        loop: true,
        speed: 1200,

        autoplay: {
            delay: 2000,
            disableOnInteraction: true,
            pauseOnMouseEnter: true,
            waitForTransition: true,
        }
    });

    window.addEventListener('load', function() {
        requestAnimationFrame(() => {
            const swiper2 = new Swiper(".swiper-bougie", {
                effect: "cards",
                grabCursor: true,
                keyboard: {
                    enabled: true,
                    onlyInViewport: false,
                },
                speed: 600,
                lazy: true,

                autoplay: {
                    delay: 2000,
                    disableOnInteraction: true,
                    pauseOnMouseEnter: true,
                    waitForTransition: true,
                },
            });
        });
    });



    const swiper3 = new Swiper(".swiper-actu", {
        spaceBetween: 30,
        pagination: {
            el: ".my-custom-pagination-div",
            clickable: true,
            renderBullet: (index, className) => {
                return '<span class="' + className + '">' + (index + 1) + "</span>";
            },
        },
        autoplay: {
            delay: 4200,
            disableOnInteraction: true,
            pauseOnMouseEnter: true,
            waitForTransition: true,
        },
        loop: true,
    });
</script>
<?php get_footer() ?>