    </main> <!--#page-content end-->
<?php 
    $office_locations_headline = get_field('office_locations_headline', 'option');
    $office_locations_list = get_field('office_locations_list', 'option');
    $copyright = get_field('copyright', 'option');
    $social_networks = get_field('social_networks', 'option');
    $subscribe_form_headline = get_field('subscribe_form_headline', 'option');
    $subscribe_form_id = get_field('subscribe_form_id', 'option');    
?>
    <footer id="site-footer">
        <div class="newsletter-form">
            <?php if($subscribe_form_headline): ?>
                <h2><?php echo $subscribe_form_headline; ?></h2>
            <?php endif; ?>
            <?php echo do_shortcode($subscribe_form_id); ?>
        </div>

        <div class="navigation">
            <div class="navigation nav-1">
                <nav>
                    <h3><?php echo $office_locations_headline ?></h3>

                    <div class="locations-wrap">
                        <?php foreach($office_locations_list as $singleLocation): ?>
                            <div class="single-location">
                                <?php if($singleLocation['office_location']): ?>
                                    <h4><?php echo $singleLocation['office_location'] ?></h4>
                                <?php endif; ?>

                                <?php if($singleLocation['office_info']): ?>
                                    <?php echo $singleLocation['office_info'] ?>
                                <?php endif; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </nav>
            </div>
            <div class="navigation nav-2">
                <nav>
                    <?php wp_nav_menu(
                        array(
                            'theme_location' => 'menu-2',
                            'container' => false
                        )
                    ); ?>
                </nav>
            </div>
        </div>

        <div class="bottom-section">
            <div class="social-wrap">
                <?php if($social_networks): ?>
                    <p>Follow Us:</p>
                    <?php foreach($social_networks as $singleNetwork): ?>
                        <a href="<?php echo $singleNetwork['single_network_link']; ?>" target="_blank">
                            <img src="<?php echo $singleNetwork['single_network_image']['url']; ?>' ?>" alt="">
                        </a>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>

            <div class="copyright">
                <?php if($copyright): ?>
                    <?php echo $copyright ?>
                <?php endif; ?>
            </div>

            <?php wp_nav_menu(
                array(
                    'theme_location' => 'menu-3',
                    'container' => false
                )
            ); ?>
        </div>

    </footer>
</div> <!--#page end-->

<?php wp_footer(); ?>

</body>

</html>