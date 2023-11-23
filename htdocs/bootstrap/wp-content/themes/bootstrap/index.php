<?php get_header() ?>

<div class="container">
    <div class="row">
        <?php while(have_post()): the_post(); ?>
        <div class="col">
            <div class="card">
                <?php the_post_thumbnail('thumbnail', ['class' => 'card-img-top']);
                <div class="card-body">
                    <div class="card-title" ?><?php the_title(); ?></div>
                    <div class="card-text">
                    <?php the_content(); ?>
                </div>
                <a 
                href="<?php the_prermalink(); ?>"
                class="btn btn-primary">
                voir</a>
            </div>
        </div> 
         <?php endwhile; ?>
    </div>
</div>

<?php get_footer() ?>