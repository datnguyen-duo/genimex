<?php
/* Template Name: Expertise */

$hero_section_headline = get_field('hero_section_headline');
$hero_section_button = get_field('hero_section_button');

$single_expertises_headline = get_field('single_expertises_headline', 'option');
$single_expertises_button = get_field('single_expertises_button', 'option');

$second_section_headline = get_field('second_section_headline');
$second_section_description = get_field('second_section_description');
$second_section_first_slider = get_field('second_section_first_slider');
$second_section_second_slider = get_field('second_section_second_slider');

$third_section_headline = get_field('third_section_headline');
$third_section_description = get_field('third_section_description');
$third_section_first_image = get_field('third_section_first_image');
$third_section_second_image = get_field('third_section_second_image');

$fourth_section_headline = get_field('fourth_section_headline');
$fourth_section_list = get_field('fourth_section_list');

$fifth_section_headline = get_field('fifth_section_headline');
$fifth_section_featured_capabilities = get_field('fifth_section_featured_capabilities');

get_header(); ?>
    <div class="template-expertise-page-container">
        <div class="expertise-hero animate">
            <?php if($hero_section_headline): ?>
                <h1>
                    <?php echo $hero_section_headline; ?>
                </h1>
            <?php endif; ?>
            <?php if($hero_section_button): ?>
                <a href="<?php echo $hero_section_button['url'] ?>" target="<?php echo $hero_section_button['target'] ?>" class="btn">
                    <span>
                        <?php echo $hero_section_button['title'] ?>
                    </span>
                </a>
            <?php endif; ?>
        </div>
        <div class="second-section-wrap animate">
            <div class="second-section">
                <div class="second-section-holder">
                    <div class="left">
                        <div class="slider first">
                            <div class="inner desktop">
                                <?php foreach($second_section_first_slider as $singleSlide): ?>
                                    <div class="image-holder-wrap">
                                        <div class="image-holder">
                                            <?php echo wp_get_attachment_image( $singleSlide['slider_image']['id'], 'full', false, array( 'class' => '' ) ); ?>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <div class="inner desktop">
                                <?php foreach($second_section_first_slider as $singleSlide): ?>
                                    <div class="image-holder-wrap">
                                        <div class="image-holder">
                                            <?php echo wp_get_attachment_image( $singleSlide['slider_image']['id'], 'full', false, array( 'class' => '' ) ); ?>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <div class="inner">
                                <?php foreach($second_section_first_slider as $singleSlide): ?>
                                    <div class="image-holder-wrap">
                                        <div class="image-holder">
                                            <?php echo wp_get_attachment_image( $singleSlide['slider_image']['id'], 'full', false, array( 'class' => '' ) ); ?>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="slider second">
                            <div class="inner desktop">
                                <?php foreach($second_section_second_slider as $singleSlide): ?>
                                    <div class="image-holder-wrap">
                                        <div class="image-holder">
                                            <?php echo wp_get_attachment_image( $singleSlide['slider_image']['id'], 'full', false, array( 'class' => '' ) ); ?>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <div class="inner desktop">
                                <?php foreach($second_section_second_slider as $singleSlide): ?>
                                    <div class="image-holder-wrap">
                                        <div class="image-holder">
                                            <?php echo wp_get_attachment_image( $singleSlide['slider_image']['id'], 'full', false, array( 'class' => '' ) ); ?>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <div class="inner">
                                <?php foreach($second_section_second_slider as $singleSlide): ?>
                                    <div class="image-holder-wrap">
                                        <div class="image-holder">
                                            <?php echo wp_get_attachment_image( $singleSlide['slider_image']['id'], 'full', false, array( 'class' => '' ) ); ?>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <div class="right">
                        <div class="right-content">
                            <?php if($second_section_headline): ?>
                                <h2>
                                    <?php echo $second_section_headline; ?>
                                </h2>
                            <?php endif; ?>
                            <?php if($second_section_description): ?>
                                <p>
                                    <?php echo $second_section_description; ?>
                                </p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="third-section">
            <?php if($third_section_headline): ?>
                <h2 class="animate">
                    <?php echo $third_section_headline; ?>
                </h2>
            <?php endif; ?>

            <section class="images-with-description-section">
                <div class="section-content">
                    <div class="images-holder animate">
                        <?php if($third_section_first_image): ?>
                            <div class="image-holder">
                                <div class="image">
                                    <?php echo wp_get_attachment_image( $third_section_first_image['id'], 'full', false, array( 'class' => '' ) ); ?>
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if($third_section_second_image): ?>
                            <div class="image-holder">
                                <div class="image">
                                    <?php echo wp_get_attachment_image( $third_section_second_image['id'], 'full', false, array( 'class' => '' ) ); ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="info-holder animate">
                        <div class="section-description">
                            <?php if($third_section_description): ?>
                                <p>
                                    <?php echo $third_section_description; ?>
                                </p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>
            
            <?php if($fourth_section_headline): ?>
                <h3 class="animate">
                    <?php echo $fourth_section_headline; ?>
                </h3>
            <?php endif; ?>

            <div class="services-holder animate">
                <?php foreach($fourth_section_list as $singleItem): ?>
                    <div class="service-holder">
                        <div class="service">
                            <h4 class="service-title"><?php echo $singleItem['list_item_headline'] ?></h4>
                            <div class="service-description">
                                <p>
                                    <?php echo $singleItem['list_item_description'] ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="fourth-section">
            <?php if($fifth_section_headline): ?>
                <h2 class="animate">
                    <?php echo $fifth_section_headline; ?>
                </h2>
            <?php endif; ?>

            <div class="expertise-list animate">
                <?php if( $fifth_section_featured_capabilities ): ?>
                    <?php foreach( $fifth_section_featured_capabilities as $post ): 
                        setup_postdata($post);
                        $expertiseVideo = get_field('video', get_the_ID());
                        ?>

                        <a href="<?php the_permalink(); ?>" class="single-expertise">
                            <div class="image-holder">
                                <h3><?php the_title(); ?></h3>

                                <video class="section-background" mute loop playsinline poster="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>">
                                    <source src="<?php echo $expertiseVideo['url']; ?>" type="video/mp4">
                                </video>

                                <div class="pill">
                                    Learn More
                                </div>
                            </div>
                            <p>
                                <?php the_excerpt(); ?>
                            </p>
                        </a>
                    <?php endforeach; ?>
                    <?php 
                    // Reset the global post object so that the rest of the page works correctly.
                    wp_reset_postdata(); ?>
                <?php endif; ?>
            </div>
        </div>

        <?php if($single_expertises_button || $single_expertises_headline): ?>
            <div class="fifth-section animate">
                <h2>
                    <?php echo $single_expertises_headline; ?>
                </h2>

                <?php if($single_expertises_button): ?>
                    <a href="<?php echo $single_expertises_button['url'] ?>" target="<?php echo $single_expertises_button['target'] ?>" class="btn">
                        <span><?php echo $single_expertises_button['title'] ?></span>
                    </a>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
<?php get_footer(); ?>