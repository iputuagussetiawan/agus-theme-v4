<?php

get_header(); 

?>
<section class="work">
    <div class="container">
        <div class="work__grid">
            <?php 
                $args = array(
                    'post_type'      => 'post',    // Specify post type (e.g., 'post', 'page', 'custom_post_type')
                    'posts_per_page' => 10,        // Number of posts to display
                    'orderby'        => 'date',    // Order posts by date
                    'order'          => 'DESC',     // Order posts in descending order
                );
                
                $query = new WP_Query( $args );
            ?>
            <?php 
            
                if ( $query->have_posts() ) {
                    while ( $query->have_posts() ) {
                        $query->the_post();
                        ?>
                        <div class="card-work">
                            <div class="card-work__image-container">
                                <img src="<?php echo get_the_post_thumbnail_url();?>" alt="<?php the_title()?>" class="card-work__image">
                            </div>
                            <div class="card-info__container">
                                <h3 class="card-info__title">
                                    <?php the_title()?>
                                </h3>
                            </div>
                        </div>
                        <?php 
                    }
                    wp_reset_postdata(); // Reset post data to the main loop
                } else {
                    echo 'No posts found';
                }
            ?>
        </div>
    </div>
</section>
<?php

get_footer();

?>