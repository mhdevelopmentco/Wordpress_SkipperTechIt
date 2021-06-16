<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
  
 </div><!-- .site-content -->

	<footer class="text-center" role="contentinfo" style="padding: 20px 0; vertical-align: middle;">
			<!--p class="text-center roboto-22" id="copyright">
				<span>&#169</span> Copyright 2016
			</p>
			<p class="text-right helt-17 block-in-mob" id="author">
				Design by <span><img src="<?php echo get_template_directory_uri();?>/img/footer.png"/></span>TROSS</p>
			</p-->

			<p style="margin: 0;">
			  <span class="roboto-22-regular" style="color:#8092AB;">&#169 Copyright 2016</span>
			  <span class="helt-17" id="author"><a href="http://www.tross.co"  style="color:#607389; text-decoration: none;">Design by <span><img src="<?php echo get_template_directory_uri();?>/img/footer.png" style="text-align:text-bottom; "/></span></a></span>
			</p>
	</footer><!-- .site-footer -->

<?php wp_footer(); ?>
</body>
</html>
