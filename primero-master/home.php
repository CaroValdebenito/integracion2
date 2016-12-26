<?php get_header(); ?>

<header class="intro-header" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/home-bg.jpg')">
<div class="container">
<div class="row">
<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
<div class="site-heading">
<h1><?php bloginfo('name');?></h1>
<hr class="small">
<span class="subheading"><?php bloginfo('description');?></span>
</div>
</div>
</div>
</div>
</header>

<div class="container">
<div class="row">
<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

<!-- acá parte el Loop -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="post-preview">
<a href="<?php the_permalink();?>">
<h2 class="post-title"><?php the_title();?></h2>
<h3 class="post-subtitle"><?php the_excerpt();?></h3>
</a>
<p class="post-meta">Posted by <?php the_author();?> el <?php the_date('d \d\e M, Y');?></p>
</div>
<hr>
<?php endwhile; ?>
<?php else : ?>
<div class="post-preview">
<a href="<?php the_permalink();?>">
<h2 class="post-title">Error 404</h2>
<h3 class="post-subtitle">Contenido no disponible</h3>
</a>
<p class="post-meta">Volver a <a href="<?php bloginfo('url');?>">portada</a></p>
</div>
<hr>
<?php endif; ?>
<!-- acá termina el Loop -->

<!-- acá parte el Pager -->
<ul class="pager">
<li class="next">
<a href="#">Older Posts &rarr;</a>
</li>
</ul>
<!-- acá termina el Pager -->
</div>
</div>
</div>
<hr>
<?php get_footer(); ?>
