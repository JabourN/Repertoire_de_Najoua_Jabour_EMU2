<?php get_header();?>

<?php while(have_posts()): the_post(); ?>

<header>
    <?php post_the_thumbnail() ?>
</header>

<h1><?php the_title(); ?></h1>

<article>
    <?php the_content(); ?>
</article>

<a href="<?php echo home_url('/')?>"> Retour au cv</a>

<?php endwhile; ?>

<?php get_footer();?>
