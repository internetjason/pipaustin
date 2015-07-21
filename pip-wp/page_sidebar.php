<?php /* Template Name: About Pages */ ?>
<?php get_header(); ?>

<!-- Bootstrap Container -->
<div class="container body-container">

    <div class="col-sm-9 col-sm-push-3">
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <article role="main" class="primary-content" id="post-<?php the_ID(); ?>">
            <?php if ( is_front_page() ) { ?>
            <!--            <h1><?php the_title(); ?></h1>-->
            <?php } else { ?>
            <!--            <h1><?php the_title(); ?></h1>-->
            <?php } ?>

            <?php the_content(); ?>

            <?php #wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:' ), 'after' => '</div>' ) ); ?>

            <?php #edit_post_link( __( 'Edit' ), '<span class="edit-link">', '</span>' ); ?>
            <?php #comments_template( '', true ); ?>

            <?php endwhile; ?>
        </article>
    </div>
    <div class="col-sm-3 col-sm-pull-9">
        <div id="sidebar" data-spy="affix" data-offset-top="180">
            <?php dynamic_sidebar( 'About Sidebar' ); ?>
        </div>
    </div>

</div> <!-- / . body container -->

<?php get_footer( 'no-sidebar' ); // will include footer-no-sidebar.php; ?>
