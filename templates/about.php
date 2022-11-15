<?php
/* Template Name: About */

$hero_section_main_headline = get_field('hero_section_main_headline');
$hero_section_image = get_field('hero_section_image');
$hero_section_secondary_headline = get_field('hero_section_secondary_headline');
$hero_section_description = get_field('hero_section_description');

$in_numbers_headline = get_field('in_numbers_headline');
$in_numbers_link = get_field('in_numbers_link');
$in_numbers_list = get_field('in_numbers_list');

$history_section_headline = get_field('history_section_headline');
$history_section_first_image = get_field('history_section_first_image');
$history_section_first_image_date = get_field('history_section_first_image_date');
$history_section_second_image = get_field('history_section_second_image');
$history_section_second_image_date = get_field('history_section_second_image_date');
$history_section_third_image = get_field('history_section_third_image');
$history_section_third_image_date = get_field('history_section_third_image_date');
$history_section_fourth_image = get_field('history_section_fourth_image');
$history_section_fourth_image_date = get_field('history_section_fourth_image_date');
$history_section_list = get_field('history_section_list');

$word_of_owner_description = get_field('word_of_owner_description');
$word_of_owner_image = get_field('word_of_owner_image');
$word_of_owner_name = get_field('word_of_owner_name');
$word_of_owner_position = get_field('word_of_owner_position');

$team_section_headline = get_field('team_section_headline');

$args = array(
    'post_type' => 'team',
    'posts_per_page' => '-1',
    'post_status' => 'publish',
);

$team = new WP_Query( $args );

get_header(); ?>
    <div class="template-about-page-container">
        <div class="text-hero about-hero animate">
            <?php if($hero_section_main_headline): ?>
                <h1>
                    <?php echo $hero_section_main_headline; ?>
                </h1>
            <?php endif; ?>
        </div>

        <div class="first-section">
            <div class="first-section-holder animate">
                <div class="left">
                    <?php if($hero_section_image): ?>
                        <div class="image-holder">
                            <?php echo wp_get_attachment_image( $hero_section_image['id'], 'full', false, array( 'class' => '', 'loading' => 'eager' ) ); ?>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="right">
                    <div class="right-content">
                        <?php if($hero_section_secondary_headline): ?>
                            <h2>
                                <?php echo $hero_section_secondary_headline; ?>
                            </h2>
                        <?php endif; ?>
                        <?php if($hero_section_description): ?>
                            <p>
                                <?php echo $hero_section_description; ?>
                            </p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="ournumbers-section">
            <div class="section-content">
                <div class="info-holder animate">
                    <?php if($in_numbers_headline): ?>
                        <h2 class="section-title">
                            <?php echo $in_numbers_headline; ?>
                        </h2>
                    <?php endif; ?>
                    <?php if($in_numbers_link): ?>
                        <a href="<?php echo $in_numbers_link['url'] ?>" target="<?php echo $in_numbers_link['target'] ?>" class="btn mobile">
                            <span>
                                <?php echo $in_numbers_link['title'] ?>
                            </span>
                        </a>
                    <?php endif; ?>
                    <?php if($in_numbers_link): ?>
                        <a href="<?php echo $in_numbers_link['url'] ?>" target="<?php echo $in_numbers_link['target'] ?>" class="link-btn desktop">
                            <?php echo $in_numbers_link['title'] ?>
                            <span>
                                <?php icon_plus(); ?>
                                <?php icon_white_arrow(); ?>
                            </span>
                        </a>
                    <?php endif; ?>
                </div>
                <?php if($in_numbers_list): ?>
                    <div class="ournumbers-holder animate">
                        <?php foreach($in_numbers_list as $singleItem): ?>
                            <div class="single-box-holder">
                                <div class="single-box">
                                    <h3 class="single-box-title"><?php echo $singleItem['single_item_headline'] ?></h3>
                                    <div class="single-box-description">
                                        <p>
                                            <?php echo $singleItem['single_item_description'] ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <div class="history-section">
            <div class="history-section-holder">
                <div class="history-section-content">
                    <div class="top-section animate">
                        <div class="left">
                            <div class="two-image-holder">
                                <div class="image-holder-wrap">
                                    <div class="image-holder">
                                        <?php if($history_section_first_image): ?>
                                            <?php echo wp_get_attachment_image( $history_section_first_image['id'], 'large', false, array( 'class' => '' ) ); ?>
                                        <?php endif; ?>
                                        <?php if($history_section_first_image_date): ?>
                                            <div class="pill">
                                                <?php echo $history_section_first_image_date ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="image-holder-wrap small">
                                    <div class="image-holder">
                                        <?php if($history_section_second_image): ?>
                                            <?php echo wp_get_attachment_image( $history_section_second_image['id'], 'large', false, array( 'class' => '' ) ); ?>
                                        <?php endif; ?>
                                        <?php if($history_section_second_image_date): ?>
                                            <div class="pill">
                                                <?php echo $history_section_second_image_date ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="two-image-holder">
                                <div class="image-holder-wrap small">
                                    <div class="image-holder">
                                        <?php if($history_section_third_image): ?>
                                            <?php echo wp_get_attachment_image( $history_section_third_image['id'], 'large', false, array( 'class' => '' ) ); ?>
                                        <?php endif; ?>
                                        <?php if($history_section_third_image_date): ?>
                                            <div class="pill">
                                                <?php echo $history_section_third_image_date ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="image-holder-wrap">
                                    <div class="image-holder">
                                        <?php if($history_section_fourth_image): ?>
                                            <?php echo wp_get_attachment_image( $history_section_fourth_image['id'], 'large', false, array( 'class' => '' ) ); ?>
                                        <?php endif; ?>
                                        <?php if($history_section_fourth_image_date): ?>
                                            <div class="pill">
                                                <?php echo $history_section_fourth_image_date ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="right">
                            <?php if($history_section_headline): ?>
                                <h2>
                                    <?php echo $history_section_headline; ?>
                                </h2>


                            <?php endif; ?>
                        </div>
                    </div>
                    <?php if($history_section_list): ?>
                        <div class="bottom-section animate">
   
                            <div class="swiper history-swiper">
                                <div class="swiper-wrapper">
                                    <?php foreach($history_section_list as $singleSlide): ?>
                                        <div class="swiper-slide">
                                            <div class="swiper-content">
                                                <div class="slide-year">
                                                    <?php echo $singleSlide['single_item_year'] ?>
                                                </div>
                                                <div class="slide-description">
                                                    <?php echo $singleSlide['single_item_description'] ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                                <div class="pagination-holder">
                                    <div class="history-swiper-pagination"></div>
                                    <div class="controls-holder">
                                        <div class="swiper-button white history-swiper-button-prev">
                                            <?php icon_white_arrow(); ?>
                                        </div>
                                        <div class="swiper-button white history-swiper-button-next">
                                            <?php icon_white_arrow(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="ownerword-section animate">
                    <div class="left animate">
                        <div class="logo-holder">
                            <?php echo wp_get_attachment_image( $word_of_owner_image['id'], 'medium', false, array( 'class' => '' ) ); ?>
                        </div>

                        <div class="author-holder">
                            <?php if($word_of_owner_name): ?>
                                <div class="author-name">
                                    <?php echo $word_of_owner_name; ?>
                                </div>
                            <?php endif; ?>
                            <?php if($word_of_owner_position): ?>
                                <div class="author-position">
                                    <?php echo $word_of_owner_position; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="right animate">
                        <?php if($word_of_owner_description): ?>
                            <p>
                                <?php echo $word_of_owner_description; ?>
                            </p>
                        <?php endif; ?>
                        <div class="author-holder">
                            <?php if($word_of_owner_name): ?>
                                <div class="author-name">
                                    <?php echo $word_of_owner_name; ?>
                                </div>
                            <?php endif; ?>
                            <?php if($word_of_owner_position): ?>
                                <div class="author-position">
                                    <?php echo $word_of_owner_position; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="team-section">
            <div class="text-hero animate">
                <?php if($team_section_headline): ?>
                    <h2>
                        <?php echo $team_section_headline; ?>
                    </h2>
                <?php endif; ?>
            </div>

            <div class="team-holder animate">
                <?php if ( $team->have_posts() ):
                    while ( $team->have_posts() ):
                        $team->the_post();
                        $team_member_position = get_field('team_member_position', get_the_ID());
                        $team_member_location = get_field('team_member_location', get_the_ID());
                        $team_member_linkedin = get_field('team_member_linkedin', get_the_ID());
                    ?>
                        <div class="single-team">
                            <div class="image-holder">
                                <?php echo wp_get_attachment_image(get_post_thumbnail_id(), 'large'); ?>
                                <?php if($team_member_location): ?>
                                    <div class="pill">
                                        <?php echo $team_member_location; ?>
                                    </div>
                                <?php endif; ?>
                                <?php if($team_member_linkedin): ?>
                                    <a href="<?php echo $team_member_linkedin; ?>" target="_blank" class="mobile">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40">
                                            <g id="Group_1772" data-name="Group 1772" transform="translate(-1187 -656.208)">
                                                <ellipse id="Ellipse_219" data-name="Ellipse 219" cx="20" cy="20" rx="20" ry="20" transform="translate(1187 656.208)" fill="#43bfad"/>
                                                <g id="Group_424" data-name="Group 424" transform="translate(1198.792 665.97)">
                                                <path id="linkedin" d="M18.424,10.822v6.812h-3.95V11.272c0-1.6-.571-2.686-2-2.686a2.161,2.161,0,0,0-2.026,1.444,2.7,2.7,0,0,0-.131.963v6.635H6.36s.053-10.764,0-11.88h3.956V7.437l-.026.039h.026V7.437a3.922,3.922,0,0,1,3.56-1.963C16.475,5.475,18.424,7.173,18.424,10.822ZM2.237.027a2.058,2.058,0,1,0-.052,4.106h.026A2.059,2.059,0,1,0,2.237.027Zm-2,17.607H4.182V5.754H.234Z" transform="translate(-0.008 -0.02)" fill="#fff"/>
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                <?php endif; ?>
                            </div>

                            <div class="team-info">
                                <div class="team-title">
                                    <h3>
                                        <?php echo the_title(); ?>
                                    </h3>
                                    <?php if($team_member_linkedin): ?>
                                        <a href="<?php echo $team_member_linkedin; ?>" target="_blank">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40">
                                                <g id="Group_1772" data-name="Group 1772" transform="translate(-1187 -656.208)">
                                                    <ellipse id="Ellipse_219" data-name="Ellipse 219" cx="20" cy="20" rx="20" ry="20" transform="translate(1187 656.208)" fill="#43bfad"/>
                                                    <g id="Group_424" data-name="Group 424" transform="translate(1198.792 665.97)">
                                                    <path id="linkedin" d="M18.424,10.822v6.812h-3.95V11.272c0-1.6-.571-2.686-2-2.686a2.161,2.161,0,0,0-2.026,1.444,2.7,2.7,0,0,0-.131.963v6.635H6.36s.053-10.764,0-11.88h3.956V7.437l-.026.039h.026V7.437a3.922,3.922,0,0,1,3.56-1.963C16.475,5.475,18.424,7.173,18.424,10.822ZM2.237.027a2.058,2.058,0,1,0-.052,4.106h.026A2.059,2.059,0,1,0,2.237.027Zm-2,17.607H4.182V5.754H.234Z" transform="translate(-0.008 -0.02)" fill="#fff"/>
                                                    </g>
                                                </g>
                                            </svg>
                                        </a>
                                    <?php endif; ?>
                                </div>
                                <?php if($team_member_position): ?>
                                    <div class="team-position">
                                        <?php echo $team_member_position; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endwhile; wp_reset_postdata();?>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>