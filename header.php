<!doctype html>

<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://player.vimeo.com/api/player.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php   
    $social_networks = get_field('social_networks', 'option'); 
    $header_button = get_field('header_button', 'option')
?>
<div id="page">
    
    <header id="site-header" <?php if(is_front_page()): ?>class="home-page"<?php endif; ?>>
        <div class="logo-holder">
            <a href="<?= get_site_url() ?>">
                <img src="<?= get_template_directory_uri().'/src/images/logo/genimex_logo_white.svg' ?>" alt="logo" class="light-logo desktop">
                <img src="<?= get_template_directory_uri().'/src/images/logo/genimex_logo_gray.svg' ?>" alt="logo" class="dark-logo desktop">
                <img src="<?= get_template_directory_uri().'/src/images/logo/genimex_logo_white.svg' ?>" alt="logo" class="light-logo mobile">
                <img src="<?= get_template_directory_uri().'/src/images/logo/genimex_logo_gray.svg' ?>" alt="logo" class="dark-logo mobile">
            </a>
        </div>

        <nav>
            <?php wp_nav_menu(
                array(
                    'theme_location' => 'menu-1',
                    'container' => false,
                )
            ); ?>
            <div class="buttons-holder">
                <?php if($header_button): ?>
                    <a href="<?php echo $header_button['url'] ?>" target="<?php echo $header_button['target'] ?>" class="btn small">
                        <span>
                            <?php echo $header_button['title'] ?>
                        </span>
                    </a>
                <?php endif; ?>
    
                <div class="mobile-opener">
                    <div class="opener-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </nav>
        <div class="mobile-menu">

            <?php wp_nav_menu(
                array(
                    'theme_location' => 'menu-4',
                    'container' => false,
                )
            ); ?>

            <div class="social-wrap">
                <?php if($social_networks): ?>
                    <p>Follow Us:</p>
                    <div class="icons-wrap">
                        <?php foreach($social_networks as $singleNetwork): ?>
                            <a href="<?php echo $singleNetwork['single_network_link']; ?>" target="_blank">
                                <img src="<?php echo $singleNetwork['single_network_image']['url']; ?>' ?>" alt="">
                            </a>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </header>

    <main id="page-content">