<?php get_header(); 
    $video = get_field('video', get_the_ID());

    
    $cta_headline = get_field('cta_headline');
    $cta_description = get_field('cta_description');
    $cta_link = get_field('cta_link');
    
    $first_section_headline = get_field('first_section_headline', get_the_ID());
    $first_section_button = get_field('first_section_button', get_the_ID());
    $first_section_description = get_field('first_section_description', get_the_ID());

    $second_section_headline = get_field('second_section_headline', get_the_ID());
    $second_section_list = get_field('second_section_list', get_the_ID());

    $testimonial_section_logo = get_field('testimonial_section_logo', get_the_ID());
    $testimonial_section_background = get_field('testimonial_section_background', get_the_ID());
    $testimonial_section_author_name = get_field('testimonial_section_author_name', get_the_ID());
    $testimonial_section_author_position = get_field('testimonial_section_author_position', get_the_ID());
    $testimonial_section_description = get_field('testimonial_section_description', get_the_ID());
?>
<div class="template-single-expertise-page-container">
    <div class="hero-section animate">
        <div class="image-holder">
            <video autoplay muted loop playsinline class="section-background hero-video" id="heroVideo">
                <source src="<?php echo $video['url']; ?>" type="video/mp4">
            </video>
            <h1><?php the_title(); ?></h1>
        </div>
    </div>

    <div class="second-section animate">
        <div class="left">
            <div class="left-content">
                <?php if($first_section_headline): ?>
                    <h2>
                        <?php echo $first_section_headline; ?>
                    </h2>
                <?php endif; ?>
    
                <?php if($first_section_button): ?>
                    <a href="<?php echo $first_section_button['url'] ?>" target="<?php echo $first_section_button['target'] ?>" class="btn desktop">
                        <span>
                            <?php echo $first_section_button['title'] ?>
                        </span>
                    </a>
                <?php endif; ?>
            </div>
        </div>
        <div class="right">
            <?php if($first_section_description): ?>
                <p>
                    <?php echo $first_section_description; ?>
                </p>
            <?php endif; ?>
            <?php if($first_section_button): ?>
                <a href="<?php echo $first_section_button['url'] ?>" target="<?php echo $first_section_button['target'] ?>" class="btn mobile">
                    <span>
                        <?php echo $first_section_button['title'] ?>
                    </span>
                </a>
            <?php endif; ?>
        </div>
    </div>

    <div class="third-section animate">
        <?php if($second_section_headline): ?>
            <h2>
                <?php echo $second_section_headline; ?>
            </h2>
        <?php endif; ?>
        <div class="third-section-content">
            <div class="left">
                <?php $counter=0; foreach($second_section_list as $singleItem):?>
                    <div class="single-accordion" data-index="<?php echo $counter; ?>">
                    
                        <div class="accordion-header">
                            <h3>
                                <?php echo $singleItem['list_headline'] ?>
                            </h3>
                            <div class="accordion-opener">
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                                
                        <div class="accordion-description">
                            <div class="icon-holder">
                                <img src="<?php echo $singleItem['list_icon']['url'] ?>" alt="<?php echo $singleItem['list_icon']['alt'] ?>">
                            </div>
                            <p>
                                <?php echo $singleItem['list_description'] ?>
                            </p>
                        </div>
                            
                    </div>
                <?php $counter++; endforeach; ?>
            </div>
            <div class="right">
                <div class="right-content">
                    <div class="swiper swiper-single-expertise">
                        <div class="swiper-wrapper">
                            <?php foreach($second_section_list as $singleItem):?>
                                
                                <div class="swiper-slide">
                                    <div class="icon-holder">
                                        <img src="<?php echo $singleItem['list_icon']['url'] ?>" alt="<?php echo $singleItem['list_icon']['alt'] ?>">
                                    </div>
                                    <p>
                                        <?php echo $singleItem['list_description'] ?>
                                    </p>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <div class="controls-holder">
                        <div class="counter">
                            <span class="current-slide">1</span>/<span class="total-slides"><?php echo count($second_section_list); ?></span>
                        </div>
                        <div class="swiper-buttons">
                            <div class="swiper-button single-expertise-swiper-button-prev">
                                <img src="<?= get_template_directory_uri().'/src/images/icons/swiper-arrow.svg' ?>" alt="">
                            </div>
                            <div class="swiper-button single-expertise-swiper-button-next">
                                <img src="<?= get_template_directory_uri().'/src/images/icons/swiper-arrow.svg' ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="fourth-section" style="background-color:<?php echo $testimonial_section_background; ?>">
        <div class="left animate">
            <div class="logo-holder">
                <?php if($testimonial_section_logo): ?>
                    <img src="<?php echo $testimonial_section_logo['url'] ?>" alt="<?php echo $testimonial_section_logo['alt'] ?>">
                <?php endif; ?>

                <div class="author-holder">
                    <?php if($testimonial_section_author_name): ?>
                        <div class="author-name">
                            <?php echo $testimonial_section_author_name; ?>
                        </div>
                    <?php endif; ?>

                    <?php if($testimonial_section_author_position): ?>
                        <div class="author-position">
                            <?php echo $testimonial_section_author_position; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="right animate">
            <?php if($testimonial_section_description): ?>
                <p>
                    <?php echo $testimonial_section_description; ?>
                </p>
            <?php endif; ?>

            <div class="author-holder">
                    <?php if($testimonial_section_author_name): ?>
                        <div class="author-name">
                            <?php echo $testimonial_section_author_name; ?>
                        </div>
                    <?php endif; ?>

                    <?php if($testimonial_section_author_position): ?>
                        <div class="author-position">
                            <?php echo $testimonial_section_author_position; ?>
                        </div>
                    <?php endif; ?>
                </div>
        </div>
    </div>
    
    
    <?php if($cta_headline || $cta_description): ?>
        <div class="fifth-section animate">
            <h2><?php echo $cta_headline; ?></h2>
            <p>
                <?php echo $cta_description; ?>
            </p>

            <?php if($cta_link): ?>
                <a href="<?php echo $cta_link['url'] ?>" target="<?php echo $cta_link['target'] ?>" class="btn">
                    <span><?php echo $cta_link['title'] ?></span>
                </a>
            <?php endif; ?>
        </div>
    <?php endif; ?>
</div>
<?php get_footer(); ?>