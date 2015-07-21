<?php

add_theme_support( 'menus' );

// Adding secondary menu

add_action( 'init', 'register_secondary_menu' );
function register_secondary_menu() {
    if ( function_exists( 'register_nav_menu' ) ) {
        register_nav_menu( 'secondary-menu', 'Secondary Menu' );
    }
}

add_filter('__header', 'display_secondary_menu', 1000, 0);
function display_secondary_menu() {
    echo ( has_nav_menu( 'secondary-menu' ) ? wp_nav_menu (
        array (
            'theme_location' => 'secondary-menu',
            'container_id'    => 'secondary-menu',
            'container_class'    => 'secondary-menu'
        )
    ).'<div class="clearall"></div>' : '' );
}

// Registering sidebar
//if ( function_exists('register_sidebar') )
//	register_sidebar(array(
//		'before_widget' => '<aside>',
//		'after_widget' => '</aside>',
//		'before_title' => '<h3>',
//		'after_title' => '</h3>',
//));

if ( function_exists('register_sidebar') ) {

    register_sidebar(array(
        'name' => 'Page Sidebar 1',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>'
    ));

    register_sidebar(array(
        'name' => 'Blog Sidebar 1',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>'
    ));

    register_sidebar(array(
        'name' => 'Get Involved Sidebar',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>'
    ));
}


// Multiple sidebars from WP codex site
//register_sidebars( $number, $args );
//
//$args = array(
//    'name'          => __('Sidebar %d'),
//    'id'            => 'sidebar',
//    'description'   => '',
//    'class'         => '',
//    'before_widget' => '<li id="%1$s" class="widget %2$s">',
//    'after_widget'  => '</li>',
//    'before_title'  => '<h3 class="widgettitle">',
//    'after_title'   => '</h3>' );


add_post_type_support('page', 'excerpt');

function post_comments( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case '' :
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<div id="comment-<?php comment_ID(); ?>">
		<div class="comment-author vcard">
			<?php echo get_avatar( $comment, 40 ); ?>

			<p class="comment-meta">
				<?php printf( __( '%s' ), sprintf( '%s', get_comment_author_link() ) ); ?>

                <a class="comment-date" href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>">
                    <?php printf( __( '%1$s' ), get_comment_date() ); ?>
                </a>

                <?php if ( $comment->comment_approved == '0' ) : ?>
                    <em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.' ); ?></em>
                <?php endif; ?>
            </p>
		</div>

		<div class="comment-body"><?php comment_text(); ?></div>

		<div class="reply">
			<?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
		</div>
	</div>

	<?php
			break;
		case 'pingback'  :
		case 'trackback' :
	?>

	<li class="post pingback">
		<p><?php _e( 'Pingback:' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( '(Edit)' ), ' ' ); ?></p>
	<?php

		break;
	endswitch;
}

// Custom functions

// Removing admin bar
show_admin_bar( false );

// Disabling automatic <p> </p> tags
remove_filter( 'the_content', 'wpautop' );

remove_filter( 'the_excerpt', 'wpautop' );

// Tidy up the <head> a little. Full reference of things you can show/remove is here: http://rjpargeter.com/2009/09/removing-wordpress-wp_head-elements/
remove_action('wp_head', 'wp_generator');// Removes the WordPress version as a layer of simple security

add_theme_support('post-thumbnails');
?>
