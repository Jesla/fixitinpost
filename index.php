<?php 

get_header();
/* THIS IS HOW YOU PULL IN A LIST OF ALL BLOG POSTS */

if (have_posts()) :
    while (have_posts()) : the_post(); ?> <!--everything between this and the endwhile gets repeated for every blog post-->

    <div class="post">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>
        <?php the_content(); ?>
    </div>

    <?php endwhile;

    else : 
        echo "<p>No Content Found</p>";

    endif;

get_footer();

?>