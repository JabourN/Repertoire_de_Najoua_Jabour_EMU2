<?php get_header();?>

<?php while(have_posts()): the_post(); ?>
<h1><?php the_title(); ?></h1>

<article>
    <?php the_content(); ?>
</article>

<a href="<?php echo home_url('/')?>"> Retour au cv</a>

<?php previous_post_link('%link', 'Formation: %tilte'); ?>
<?php next_post_link('%link', 'Formation: %tilte'); ?>
<?php endwhile; ?>

<?php get_footer(); ?>