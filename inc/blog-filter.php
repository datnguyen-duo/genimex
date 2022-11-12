<?php
//$per_page = get_option( 'posts_per_page' );
// $per_page = 9;
function isMobile() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
};

if(isMobile()){
    $per_page = 3;
}
else {
    $per_page = 6;
}

isMobile();
function posts_filter() {
    /*
    TODO uncomment and replace category_name_1 and taxonomy-name-1 with the real taxonomy
    */
    $post_categories = $_GET['category'];

    $current_page = $_GET['page'];

    $posts_args = array(
        'post_type' => 'post',
        'post_status' => array( 'publish' ),
        'posts_per_page' => $GLOBALS['per_page'],
        'paged' => $current_page,
        'tax_query' => [
            'relation' => 'OR',
        ]
    );
    //    Example for taxonomy filtration
    if( $post_categories && $post_categories != 'all') {
        array_push($posts_args['tax_query'],array(
            'taxonomy' => 'category',
            'field' => 'slug',
            'terms' => $post_categories
            
        ));
        
    }

    $posts = new WP_Query($posts_args);

    print_posts($posts);
    die;
}
add_action('wp_ajax_posts_filter', 'posts_filter');
add_action('wp_ajax_nopriv_posts_filter', 'posts_filter');

function print_posts( $query = '' ) {
    if( !$query ) {
        $query = new WP_Query(array(
            'post_type' => 'post',
            'post_status' => array( 'publish' ),
            'posts_per_page' => $GLOBALS['per_page'],
            'paged' => 1,
        ));
    }
    $posts_per_page = $query->query['posts_per_page'];
    $found_posts = $query->found_posts;
    $current_page = $query->query['paged'];
    $total_pages = ceil($found_posts / $posts_per_page);

    if( $query->have_posts() ): ?> 
    <div class="all-posts-wrap">
        <?php if ( $query->have_posts() ):
            while ( $query->have_posts() ):
                $query->the_post(); 
                $post_date = get_the_date( 'F j, Y' );
            ?>
            
                <a href="<?php the_permalink(); ?>" class="single-post-article">
                    <div class="image-holder">
                        <?php echo wp_get_attachment_image(get_post_thumbnail_id(), 'large'); ?>
                        <div class="date pill">
                            <?php echo $post_date; ?>
                        </div>
                    </div>

                    <h3>
                        <?php the_title(); ?>
                    </h3>
                </a>
            <?php endwhile; wp_reset_postdata();?>
        <?php endif; ?>
    </div>

        <?php if( $total_pages > 1 ): ?>
            <div class="pagination-wrap" data-number="<?php echo wp_count_posts( 'post' )->publish; ?>" data-total="<?php echo $query->post_count; ?>" data-pages="<?php echo $total_pages; ?>">
                <div class="pagination-content posts-pagination">
                    <div class="left-arrow-holder pagination-page next-prev-page prev-page" data-page="<?= ($current_page == 1) ? $total_pages : $current_page-1; ?>">
                        <div class="arrow-holder">
                            <img src="<?= get_template_directory_uri().'/src/images/icons/swiper-arrow.svg' ?>" alt="">
                        </div>
                        <p>Previous Page</p>
                    </div>
                    
                    <div class="pagination-pages">
                        <!-- <?php for( $i=1; $i <= $total_pages; $i++ ): ?>
                            <div class="pagination-number <?= ($current_page == $i) ? 'active' : null; ?>" data-page="<?php echo $i; ?>">
                                <span><?php echo $i; ?></span>
                            </div>
                        <?php endfor; ?> -->
                    </div>
                    <div class="right-arrow-holder pagination-page next-prev-page next-page" data-page="<?= ($current_page == $total_pages) ? 1 : $current_page+1; ?>">
                        <p>Next Page</p>
                        <div class="arrow-holder">
                            <img src="<?= get_template_directory_uri().'/src/images/icons/swiper-arrow.svg' ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        <?php endif;
    else: ?>
        <div class="no-results">
            <h2>No posts found.</h2>
        </div>
    <?php endif;
}