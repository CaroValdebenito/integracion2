<?php get_header();?>

<!--acá empieza el Loop de la página-->

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<header class="intro-header" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/post-bg.jpg')">
<div class="container">
<div class="row">
<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
<div class="page-heading">
<h1><?php the_title();?></h1>
<hr class="small">
<span class="subheading"><?php the_excerpt();?></span>
</div>
</div>
</div>
</div>
</header>
<div class="container">
<div class="row">
<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
<?php the_content();?>
</div>
</div>
</div>
<hr>

<?php endwhile; ?>
<?php else : ?>

<header class="intro-header" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/post-bg.jpg')">
<div class="container">
<div class="row">
<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
<div class="page-heading">
<h1>Error 404</h1>
<hr class="small">
<span class="subheading">Esta página no existe</span>
</div>
</div>
</div>
</div>
</header>
<div class="container">
<div class="row">
<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
<p>Vuelve a la <a href="<?php bloginfo('url')?>">portada</a></p>
</div>
</div>
</div>
<hr>

<?php endif; ?>

<!--acá termina el loop de la hoja-->

<!-- Footer -->

<?php get_footer();?>
