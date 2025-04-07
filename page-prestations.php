<?php get_header() ?>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/prestations.css" />

<div class="container">
    <h1>Voici l'ensemble de nos prestations</h1>
    <section class="content-top">
        <div class="content">
            <h2>Vernis semi permanent</h2>
            <ul>
                <div class="content-item">
                    <?php
                    for ($i = 1; $i < 6; $i++) {
                        $field_name = 'title_semi_permanent_' . $i;
                        $field_value = get_field($field_name);
                        if ($field_value) {
                    ?>

                            <li><?php echo esc_html($field_value); ?></li>
                    <?php
                        }
                    }

                    ?>
                </div>
                <div class="time">
                    <?php
                    for ($i = 1; $i < 6; $i++) {
                        $field_name = 'time_semi_permanent_' . $i;
                        $field_value = get_field($field_name);
                        if ($field_value) {
                    ?>

                            <li><?php echo esc_html($field_value); ?></li>
                    <?php
                        }
                    }

                    ?>
                </div>
                <div class="price">
                    <?php
                    for ($i = 1; $i < 6; $i++) {
                        $field_name = 'price_semi_permanent_' . $i;
                        $field_value = get_field($field_name);
                        if ($field_value) {
                    ?>

                            <li><?php echo esc_html($field_value); ?></li>
                    <?php
                        }
                    }

                    ?>
                </div>
            </ul>
            <a class="btn" href="https://www.planity.com/lovely-nails-by-prisci-37140-saint-nicolas-de-bourgueil" target="_blank">
                RÉSERVER
            </a>
        </div>
        <?php if (get_field('img_semi_permanent')) : ?>
            <figure>
                <img src="<?php the_field('img_semi_permanent'); ?>" alt="<?php pathinfo('img_semi_permanent'); ?>">
            </figure>
        <?php endif; ?>
    </section>


    <section class="content-down">
        <?php if (get_field('img_rallongement')) : ?>
            <figure>
                <img src="<?php the_field('img_rallongement'); ?>" alt="<?php pathinfo('img_rallongement'); ?>">
            </figure>
        <?php endif; ?>

        <div class="content">
            <h2>Rallongement</h2>
            <ul>
                <div class="content-item">
                <?php
                    for ($i = 1; $i < 6; $i++) {
                        $field_name = 'title_rallongement_' . $i;
                        $field_value = get_field($field_name);
                        if ($field_value) {
                    ?>

                            <li><?php echo esc_html($field_value); ?></li>
                    <?php
                        }
                    }

                    ?>
                </div>
                <div class="time">
                <?php
                    for ($i = 1; $i < 6; $i++) {
                        $field_name = 'time_rallongement_' . $i;
                        $field_value = get_field($field_name);
                        if ($field_value) {
                    ?>

                            <li><?php echo esc_html($field_value); ?></li>
                    <?php
                        }
                    }

                    ?>
                </div>
                <div class="price">
                <?php
                    for ($i = 1; $i < 6; $i++) {
                        $field_name = 'price_rallongement_' . $i;
                        $field_value = get_field($field_name);
                        if ($field_value) {
                    ?>

                            <li><?php echo esc_html($field_value); ?></li>
                    <?php
                        }
                    }

                    ?>
                </div>
            </ul>

            <a class="btn" href="https://www.planity.com/lovely-nails-by-prisci-37140-saint-nicolas-de-bourgueil" target="_blank">
                RÉSERVER
            </a>
        </div>
    </section>
    <section class="content-top">
        <div class="content">
            <h2>Gel sur ongle naturel</h2>
            <ul>
                <div class="content-item">
                <?php
                    for ($i = 1; $i < 6; $i++) {
                        $field_name = 'title_gel_' . $i;
                        $field_value = get_field($field_name);
                        if ($field_value) {
                    ?>

                            <li><?php echo esc_html($field_value); ?></li>
                    <?php
                        }
                    }

                    ?>
                </div>
                <div class="time">
                <?php
                    for ($i = 1; $i < 6; $i++) {
                        $field_name = 'time_gel_' . $i;
                        $field_value = get_field($field_name);
                        if ($field_value) {
                    ?>

                            <li><?php echo esc_html($field_value); ?></li>
                    <?php
                        }
                    }

                    ?>
                </div>
                <div class="price">
                <?php
                    for ($i = 1; $i < 6; $i++) {
                        $field_name = 'price_gel_' . $i;
                        $field_value = get_field($field_name);
                        if ($field_value) {
                    ?>

                            <li><?php echo esc_html($field_value); ?></li>
                    <?php
                        }
                    }

                    ?>
                </div>
            </ul>

            <a class="btn" href="https://www.planity.com/lovely-nails-by-prisci-37140-saint-nicolas-de-bourgueil" target="_blank">
                RÉSERVER
            </a>
        </div>
        <?php if (get_field('img_gel')) : ?>
            <figure>
                <img src="<?php the_field('img_gel'); ?>" alt="<?php pathinfo('img_gel'); ?>">
            </figure>
        <?php endif; ?>
    </section>
    <section class="content-down">
    <?php if (get_field('img_nail_art')) : ?>
            <figure>
                <img src="<?php the_field('img_nail_art'); ?>" alt="<?php pathinfo('img_nail_art'); ?>">
            </figure>
        <?php endif; ?>
        <div class="content">
            <h2>Nail Art</h2>
            <ul>
                <div class="content-item">
                <?php
                    for ($i = 1; $i < 6; $i++) {
                        $field_name = 'title_nail_art_' . $i;
                        $field_value = get_field($field_name);
                        if ($field_value) {
                    ?>

                            <li><?php echo esc_html($field_value); ?></li>
                    <?php
                        }
                    }

                    ?>
                </div>
                <div class="time">
                <?php
                    for ($i = 1; $i < 6; $i++) {
                        $field_name = 'time_nail_art_' . $i;
                        $field_value = get_field($field_name);
                        if ($field_value) {
                    ?>

                            <li><?php echo esc_html($field_value); ?></li>
                    <?php
                        }
                    }

                    ?>
                </div>
                <div class="price">
                <?php
                    for ($i = 1; $i < 6; $i++) {
                        $field_name = 'price_nail_art_' . $i;
                        $field_value = get_field($field_name);
                        if ($field_value) {
                    ?>

                            <li><?php echo esc_html($field_value); ?></li>
                    <?php
                        }
                    }

                    ?>
                </div>
            </ul>

            <a class="btn" href="https://www.planity.com/lovely-nails-by-prisci-37140-saint-nicolas-de-bourgueil" target="_blank">
                RÉSERVER
            </a>
        </div>
    </section>




</div>
<?php get_footer() ?>