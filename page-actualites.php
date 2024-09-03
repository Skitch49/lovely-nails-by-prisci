<?php get_header() ?>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/home.css" />


<!--Partie Actualites-->
<div class="container-actualites">
  <div class="container-header-center">
    <div class="container-header-actu">
      <h2>Actualités</h2>
      <div class="container-search">
        <?= get_search_form() ?>
      </div>
    </div>
  </div>

  <div class="container-all-actu">
    <?php echo do_shortcode('[ajax_load_more post_type="post" images_loaded="true" scroll="true" posts_per_page="4" button_label="Afficher plus d\'actualités"]'); ?>
  </div>
</div>
<?php get_footer() ?>