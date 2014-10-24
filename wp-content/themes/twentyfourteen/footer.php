<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

		</div><!-- #main -->

		<footer id="colophon" class="site-footer" style="background-color: #e1e2e3;" role="contentinfo">

			<?php get_sidebar( 'footer' ); ?>

			<div class="site-info">
				<?php do_action( 'twentyfourteen_credits' ); ?>
				<a href="<?php echo esc_url( __( 'http://www.mumas.com/', 'twentyfourteen' ) ); ?>"><?php printf( __( 'Copyright &copy; 2014 %s', 'twentyfourteen' ), 'muma' ); ?></a>
                                
			</div><!-- .site-info -->
                        <span style="margin-left:30px; font-size: 12px;">
                                All content is licensed under the <a target="_blank" href="http://creativecommons.org/licenses/by-nc-sa/3.0/">
                                    Creative Commons Attribution-Noncommercial-Share Alike 3.0 Unported </a> License. <br/>
                        </span>
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>