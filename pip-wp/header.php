<?php ?>
<!DOCTYPE html>
<!--[if IE 9 ]><html lang="en" class="ie ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
        <head>
            <title><?php
global $page, $paged;
wp_title( '|', true, 'right' );
bloginfo( 'name' );
$site_description = get_bloginfo( 'description', 'display' );
if ( $site_description && ( is_home() || is_front_page() ) )
    echo " | $site_description";
if ( $paged >= 2 || $page >= 2 )
    echo ' | ' . sprintf( __( 'Page %s' ), max( $paged, $page ) );
                ?>
            </title>
            <meta name="description" content="<?php if ( is_single() ) {
                    single_post_title('', true);
                } else {
                    bloginfo('name'); echo " - "; bloginfo('description');
                }
                                              ?>" />
            <!-- <meta charset="<?php bloginfo( 'charset' ); ?>" /> -->
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <!-- Favicons -->
            <link rel="profile" href="http://gmpg.org/xfn/11" />
            <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
            <link rel="shortcut icon" href="<?php echo bloginfo('template_directory'); ?>/favicon.png">
            <link rel="apple-touch-icon" href="<?php echo bloginfo('template_directory'); ?>/apple-touch-icon-precomposed.png"/>
            <!-- The little things -->

            <!-- Stylesheets -->

            <!-- Bootstrap -->
            <link href="<?php echo bloginfo('template_directory'); ?>/assets/css/bootstrap.css" rel="stylesheet">

            <!-- Font Awesome -->
            <link href="<?php echo bloginfo('template_directory'); ?>/assets/css/font-awesome.css" rel="stylesheet">

            <!-- Custom Styles -->
            <link href="<?php echo bloginfo('template_directory'); ?>/style.css" rel="stylesheet">

            <!-- Custom Google Fonts -->
            <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,700' rel='stylesheet' type='text/css'>

            <!-- Stylesheets -->

            <!--
Optional Stuff - Remove comment if you need it
<script src="<?php echo bloginfo('template_directory'); ?>/assets/scripts/modernizr-2.6.2.js"></script>
-->
            <?php wp_deregister_script('jquery');wp_head(); ?>

        </head>

        <body <?php body_class(); ?> id="top">
            <!--
<header role="banner">
<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home" class="logo"><?php bloginfo( 'name' ); ?></a>
<p class="desc">
<?php bloginfo( 'description' ); ?>
</p>
<nav role="navigation">
<?php $args = array( 'menu' => 'primary', 'container' => false, 'menu_id' => false, 'menu_class' => false); wp_nav_menu($args); ?>
</nav>
<?php get_search_form(); ?>
</header>
-->
            <!-- BODY WRAPPER -->
            <div class="body-wrapper">

                <!-- Static navbar -->
                <div class="navbar-wrapper">
                    <nav class="navbar navbar-default navbar-static-top">
                        <div class="container">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="logo" src="<?php echo bloginfo('template_directory'); ?>/assets/img/parnters-in-parenting-austin.png"></a>
                            </div>
                            <div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav">
                                </ul>
                                <!-- Wordpress Navbar Code -->
                                <?php $args = array( 'menu' => 'mainnav', 'container' => false, 'menu_id' => false, 'menu_class' => 'nav navbar-nav navbar-right'); wp_nav_menu($args); ?>
                            </div>
                        </div>
                    </nav>
                </div>

                <!-- Donate Button -->
                <div class="container">
                    <span id="donate-button"></span>
                </div>
