<?php

/*
    Template Name: Page Home
*/
get_header(); 

?>
<section class="work">
    <h1>From Page Home</h1>
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
                        $postImageUrl = get_the_post_thumbnail_url(get_the_ID(),'full'); 
                        $postThumbnailUrl = get_the_post_thumbnail_url(get_the_ID(),'post-thumbnail');
                        $postTitle=get_the_title();
                        ?>
                        <div class="card-post">
                            <?php echo tmdrImage('card-post',$postThumbnailUrl,$postThumbnailUrl,$postTitle);?>
                            <div class="card-post__container">
                                <h3 class="card-post__title">
                                    <?php echo $postTitle?>
                                </h3>
                                <div class="card-post__info">
                                    <?php 
                                        the_content();
                                    ?>
                                </div>
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
<section class="image">
    <div class="container">
        <?php echo tmdrImage();?>
    </div>
</section>
<?php

get_footer();

?>