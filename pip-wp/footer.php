<?php get_sidebar(); ?>

<footer role="contentinfo">
	<p>&copy;<?php echo date("Y"); ?> <a href="#top" title="Jump back to top">&#8593;</a></p>
</footer>

<?php wp_footer(); ?>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo bloginfo('template_directory'); ?>/js/bootstrap.js"></script>

<script>!window.jQuery && document.write(unescape('%3Cscript src="<?php echo bloginfo('template_directory'); ?>/assets/scripts/jquery-2.0.3.js"%3E%3C/script%3E'))</script>
<script src="<?php echo bloginfo('template_directory'); ?>/assets/scripts/general.js"></script>
<?php if ( is_singular() ) wp_print_scripts( 'comment-reply' ); ?>
</body>
</html>
