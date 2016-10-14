<?php get_header(); ?>
<section class="row middle Home">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div class="col-12 small-12 submain">
            <?php the_content(); ?>
        </div>
    <?php endwhile; endif; ?>
</section>

<?php get_footer(); ?>
