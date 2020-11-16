    <?php
        get_header();
    ?>
    
    
    <!-- POST LOOP !-->
    <?php 
        if ( have_posts() ) : 
            while ( have_posts() ) : 
            the_post(); 
        ?>
                <h3><?php the_title(); ?></h3>
                <div class='thumbnail-image'><?php the_post_thumbnail('large');?></div>
                <small><?php the_tags();?>, <?php the_date();?></small>
                <p><?php the_content(); ?></p>
            <?php endwhile; ?>
        <?php endif; ?>



    <?php
        get_footer();
    ?>    
