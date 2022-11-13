<?php
$hero_description = get_field('hero_description');
$hero_video = get_field('hero_video');
$hero_video_mobile = get_field('hero_video_mobile');
$hero_button = get_field('hero_button');
$popup_vimeo_video_id = get_field('popup_vimeo_video_id');

$second_section_headline = get_field('second_section_headline');
$second_section_description = get_field('second_section_description');
$second_section_first_image = get_field('second_section_first_image');
$second_section_second_image = get_field('second_section_second_image');
$about_small_description = get_field('about_small_description');
$second_section_link = get_field('second_section_link');

$partners_section_headline = get_field('partners_section_headline');
$partners_section_partners = get_field('partners_section_partners');
$partners_section_video = get_field('partners_section_video');
$partners_section_video_description = get_field('partners_section_video_description');
$partners_section_link = get_field('partners_section_link');

$about_us_headline = get_field('about_us_headline');
$about_us_small_headline = get_field('about_us_small_headline');
$about_us_description = get_field('about_us_description');
$about_us_link = get_field('about_us_link');
$about_us_first_image = get_field('about_us_first_image');
$about_us_second_image = get_field('about_us_second_image');

$why_headline = get_field('why_headline');
$why_link = get_field('why_link');
$why_work_with_us_list = get_field('why_work_with_us_list');

$selected_products_headline = get_field('selected_products_headline');
$selected_products_link = get_field('selected_products_link');
$selected_products = get_field('selected_products');

$testimonials_list = get_field('testimonials_list');

get_header(); ?>
    <div class="front-page-container">
        <?php if($popup_vimeo_video_id): ?>
            <div class="video_popup_holder">
                <div class="video_holder" data-video="<?php echo $popup_vimeo_video_id; ?>">
                    
                </div>
            </div>
        <?php endif; ?>

        <section class="section-hero">
            <?php if($hero_video): ?>
                
                <video class="section-background hero-video" id="heroVideo" autoplay muted loop playsinline allow="autoplay; fullscreen">
                    <source media="(min-width:700px)" src="<?php echo $hero_video['url']; ?>" type="video/mp4">
                    <source media="(max-width:700px)" src="<?php echo $hero_video_mobile['url']; ?>" type="video/mp4">
                </video>
            <?php endif; ?>
            <div class="section-content">
                <?php if($hero_description): ?>
                    <h1 class="section-title"><?php echo $hero_description; ?></h1>
                <?php endif; ?>

                <?php if($hero_button): ?>
                    <a class="btn">
                        <?php echo $hero_button; ?>
                        <span class="mobile-icon"><?php icon_arrow(); ?></span>
                        <span>. Watch The Video <?php icon_arrow(); ?></span>                        
                    </a>
                <?php endif; ?>
            </div>
        </section>

        <section class="description-section">
            <?php if($second_section_headline): ?>
                <h2 class="section-title animate"><?php echo $second_section_headline; ?></h2>
            <?php endif; ?>
            <?php if($second_section_description): ?>
                <div class="section-description animate">
                    <p>
                        <?php echo $second_section_description ?>
                    </p>
                </div>
            <?php endif; ?>
        </section>

        <section class="images-with-description-section">
            <div class="section-content">
                <div class="images-holder animate">
                    <?php if($second_section_first_image): ?>
                        <div class="image-holder">
                            <div class="image">
                                <?php echo wp_get_attachment_image( $second_section_first_image['id'], 'full', false, array( 'class' => '' ) ); ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if($second_section_second_image): ?>
                        <div class="image-holder">
                            <div class="image">
                                <?php echo wp_get_attachment_image( $second_section_second_image['id'], 'full', false, array( 'class' => '' ) ); ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="info-holder animate">
                    <?php if($about_small_description): ?>
                        <div class="section-description">
                            <p>
                                <?php echo $about_small_description; ?>
                            </p>
                        </div>
                    <?php endif; ?>
                    <?php if($second_section_link): ?>
                        <a href="<?php echo $second_section_link['url'] ?>" target="<?php echo $second_section_link['target'] ?>" class="btn mobile">
                            <span>
                                <?php echo $second_section_link['title'] ?>
                            </span>
                        </a>
                        <a href="<?php echo $second_section_link['url'] ?>" target="<?php echo $second_section_link['target'] ?>" class="link-btn desktop">
                            <?php echo $second_section_link['title'] ?>
                            <span>
                                <?php icon_plus(); ?>
                                <?php icon_white_arrow(); ?>
                            </span>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </section>
        
        <section class="logos-section">
            <?php if($partners_section_headline): ?>
                <h2 class="section-title animate"><?php echo $partners_section_headline; ?></h2>
            <?php endif; ?>

            <div class="logos animate">
                <!-- <div class="logo-holder"></div> -->
                <?php if($partners_section_partners): ?>
                    <div class="marquee logos-swiper">
                        <div class="marquee__container">
                            <div class="marquee__inner">
                                <?php foreach($partners_section_partners as $singlePartner): ?>
                                    <div class="marquee__inner--slide">
                                        <div class="marquee__inner--slide-content">
                                            <img src="<?php echo $singlePartner['single_partner']['url'] ?>" alt="<?php echo $singlePartner['single_partner']['alt'] ?>">
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>

            <div class="image-holder">
                <?php if($partners_section_video): ?>
                    <video class="section-background animate" id="video" autoplay muted loop playsinline allow="autoplay; fullscreen">
                        <source src="<?php echo $partners_section_video['url'] ?>" type="video/mp4">
                    </video>
                <?php endif; ?>
                
                <div class="image-content">
                    <?php if($partners_section_video_description): ?>
                        <div class="section-description animate">
                            <p>
                                <?php echo $partners_section_video_description; ?>
                            </p>
                        </div>
                    <?php endif; ?>
                    <?php if($partners_section_link): ?>
                        <a href="<?php echo $partners_section_link['url'] ?>" target="<?php echo $partners_section_link['target'] ?>" class="link-btn">
                            <?php echo $partners_section_link['title'] ?>
                            <span>
                                <?php icon_plus(); ?>
                                <?php icon_white_arrow(); ?>
                            </span>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </section>

        <section class="images-with-description-2-section">
            <div class="section-content">
                <?php if($about_us_headline): ?>
                    <h2 class="section-title animate"><?php echo $about_us_headline; ?></h2>
                <?php endif; ?>

                <div class="columns">
                    <div class="col image-col">
                        <?php if($about_us_first_image): ?>
                            <div class="image-holder animate">
                                <?php echo wp_get_attachment_image( $about_us_first_image['id'], 'full', false, array( 'class' => '' ) ); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="col info-col animate">
                        <?php if($about_us_small_headline): ?>
                            <h3 class="col-title"><?php echo $about_us_small_headline; ?></h3>
                        <?php endif; ?>
                        <?php if($about_us_description): ?>
                            <div class="col-description">
                                <p>
                                    <?php echo $about_us_description; ?>
                                </p>
                            </div>
                        <?php endif; ?>
                        <?php if($about_us_link): ?>
                            <a href="<?php echo $about_us_link['url'] ?>" target="<?php echo $about_us_link['target'] ?>" class="btn">
                                <span>
                                    <?php echo $about_us_link['title'] ?>
                                </span>
                            </a>
                        <?php endif; ?>
                    </div>
                    <div class="col image-col">
                        <?php if($about_us_second_image): ?>
                            <div class="image-holder animate">
                                <?php echo wp_get_attachment_image( $about_us_second_image['id'], 'full', false, array( 'class' => '' ) ); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>

        <section class="services-section">
            <div class="section-content">
                <div class="info-holder animate">
                    <?php if($why_headline): ?>
                        <h2 class="section-title"><?php echo $why_headline; ?></h2>
                    <?php endif; ?>
                    <?php if($why_link): ?>
                        <a href="<?php echo $why_link['url'] ?>" target="<?php echo $why_link['target'] ?>" class="btn mobile">
                            <span>
                                <?php echo $why_link['title'] ?>
                            </span>
                        </a>
                        <a href="<?php echo $why_link['url'] ?>" target="<?php echo $why_link['target'] ?>" class="link-btn desktop">
                            <?php echo $why_link['title'] ?>
                            <span>
                                <?php icon_plus(); ?>
                                <?php icon_white_arrow(); ?>
                            </span>
                        </a>
                    <?php endif; ?>
                </div>

                <?php if($why_work_with_us_list): ?>
                    <div class="services-holder animate">
                        <?php foreach($why_work_with_us_list as $singleService): ?>
                            <div class="service-holder">
                                <div class="service">
                                    <div class="service-icon">
                                        <img src="<?php echo $singleService['list_icon']['url']; ?>" alt="<?php echo $singleService['list_icons']['alt']; ?>">
                                    </div>
                                    <h3 class="service-title"><?php echo $singleService['list_headline'] ?></h3>
                                    <div class="service-description">
                                        <p>
                                            <?php echo $singleService['list_description'] ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </section>
        
        <section class="work-section">
            <div class="section-content">
                <?php if($selected_products_headline): ?>
                    <h2 class="section-title animate"><?php echo $selected_products_headline; ?></h2>
                <?php endif; ?>

                <div class="swiper-controls animate">
                    <?php if($selected_products_link): ?>
                        <div>
                            <a href="<?php echo $selected_products_link['url'] ?>" target="<?php echo $selected_products_link['target'] ?>" class="link-btn">
                                <?php echo $selected_products_link['title'] ?>
                                <span>
                                    <?php icon_plus(); ?>
                                    <?php icon_white_arrow(); ?>
                                </span>
                            </a>
                        </div>
                    <?php endif; ?>
                    <div class="controls-holder">
                        <div class="swiper-button work-swiper-button-prev">
                            <img src="<?= get_template_directory_uri().'/src/images/icons/swiper-arrow.svg' ?>" alt="">
                        </div>
                        <?php if($selected_products_link): ?>
                            <div class="mobile-link">
                                <a href="<?php echo $selected_products_link['url'] ?>" target="<?php echo $selected_products_link['target'] ?>" class="">
                                    <?php echo $selected_products_link['title'] ?>
                                </a>
                            </div>
                        <?php endif; ?>
                        <div class="swiper-button work-swiper-button-next">
                            <img src="<?= get_template_directory_uri().'/src/images/icons/swiper-arrow.svg' ?>" alt="">
                        </div>
                    </div>
                </div>
                <?php if($selected_products): ?>
                    <div class="swiper work-swiper animate">
                        <div class="swiper-wrapper">
                            <?php foreach($selected_products as $singleProduct): ?>
                                <div class="swiper-slide">
                                    <div class="slide-content">
                                        <?php if($singleProduct['product_image']): ?>
                                            <div class="image-holder">
                                                <?php echo wp_get_attachment_image( $singleProduct['product_image']['id'], 'full', false, array( 'class' => '' ) ); ?>
                                            </div>
                                        <?php endif; ?>
                                        <?php if($singleProduct['product_logo']): ?>
                                            <div class="client-logo">
                                                <?php echo wp_get_attachment_image( $singleProduct['product_logo']['id'], 'thumbnail', false, array( 'class' => '' ) ); ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>

                        <div class="work-swiper-pagination"></div>
                    </div>
                <?php endif; ?>
            </div>
        </section>
        
        <section class="testimonials-section">
            <div class="section-content animate">
                <div class="left">
                    <div class="swiper testimonials-swiper testimonials-author-swiper">
                        <div class="swiper-wrapper">
                            <?php foreach($testimonials_list as $singleTestimonial): ?>
                                <div class="swiper-slide">
                                    <div class="logo">
                                        <?php if($singleTestimonial['single_testimonial_logo']): ?>
                                            <img src="<?php echo $singleTestimonial['single_testimonial_logo']['url'] ?>" alt="<?php echo $singleTestimonial['single_testimonial_logo']['alt'] ?>">
                                        <?php endif; ?>

                                        <?php if($singleTestimonial['single_testimonial_author']): ?>
                                            <div class="author-name"><?php echo $singleTestimonial['single_testimonial_author']; ?></div>
                                        <?php endif; ?>

                                        <?php if($singleTestimonial['single_testimonial_author_position']): ?>
                                            <div class="author-position"><?php echo $singleTestimonial['single_testimonial_author_position'] ?></div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <?php if($testimonials_list): ?>
                    <div class="right">
                        <div class="swiper testimonials-swiper">
                            <div class="swiper-wrapper">
                                <?php foreach($testimonials_list as $singleTestimonial): ?>
                                    <div class="swiper-slide">
                                        <div class="slide-content">
                                            <?php if($singleTestimonial['single_testimonial_description']): ?>
                                                <div class="testimonial-description">
                                                    <p>
                                                        <?php echo $singleTestimonial['single_testimonial_description'] ?>
                                                    </p>
                                                    <?php if($singleTestimonial['single_testimonial_author']): ?>
                                                        <div class="author-name"><?php echo $singleTestimonial['single_testimonial_author']; ?></div>
                                                    <?php endif; ?>
    
                                                    <?php if($singleTestimonial['single_testimonial_author_position']): ?>
                                                        <div class="author-position"><?php echo $singleTestimonial['single_testimonial_author_position'] ?></div>
                                                    <?php endif; ?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
    
                            <div class="controls-holder">
                                <div class="swiper-button testimonials-swiper-button-prev">
                                    <img src="<?= get_template_directory_uri().'/src/images/icons/swiper-arrow.svg' ?>" alt="">
                                </div>
                                <div class="swiper-button testimonials-swiper-button-next">
                                    <img src="<?= get_template_directory_uri().'/src/images/icons/swiper-arrow.svg' ?>" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </section>
    </div>
<?php get_footer(); ?>