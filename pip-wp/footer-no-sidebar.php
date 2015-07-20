    <footer>
        <div class="row">
            <div class="col-sm-12 text-center small">
                <p>&copy;<?php echo date("Y"); ?> Partners in Parenting. All Rights Reserved</p>
                <p>Partners in Parenting is a 501(c)(3) non-profit recognized by the IRS</p>
                <p>home | contact | faq | <a href="#top" title="Jump back to top">&#8593;</a></p>
                <p>privacy policy</p>
            </div>
        </div>
    </footer>

</div><!-- / . body wrapper -->

<?php wp_footer(); ?>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script>!window.jQuery && document.write(unescape('%3Cscript src="<?php echo bloginfo('template_directory'); ?>/assets/scripts/jquery-2.0.3.js"%3E%3C/script%3E'))</script>
<script src="<?php echo bloginfo('template_directory'); ?>/assets/scripts/general.js"></script>
<?php if ( is_singular() ) wp_print_scripts( 'comment-reply' ); ?>
</body>
</html>
