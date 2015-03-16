<?php
/**
 * The theme footer
 * 
 * @package bootstrap-basic
 */
?>

			</div><!--.site-content-->
			
			
			<footer id="site-footer" role="contentinfo">
				<div id="footer-row" class="row site-footer">
					<div class="col-md-6 footer-left">
						Copyright &copy; <?php echo date("Y"); ?> MarsNews.com  &nbsp;|&nbsp; 
<a href="/privacy-policy">Privacy Policy</a> &nbsp;|&nbsp; 
<a href="/terms-of-use">Terms of Use</a> &nbsp;|&nbsp;
<!-- a href="#">Advertise</a> &nbsp;|&nbsp;  --> 
<a href="http://www.43tech.com/mars/">Careers</a>

						<!-- php 
						if (!dynamic_sidebar('footer-left')) {
							printf(__('Powered by %s', 'bootstrap-basic'), 'WordPress');
							echo ' | ';
							printf(__('Theme: %s', 'bootstrap-basic'), '<a href="http://okvee.net">Bootstrap Basic</a>');
						} 
						? --> 
					</div>
					<div class="col-md-6 footer-right text-right">
						<?php dynamic_sidebar('footer-right'); ?> 
					</div>
				</div>
			</footer>
		</div><!--.container page-container-->
		

<!-- div style="text-align:center;">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-0216514216797313"
     data-ad-slot="3748743146"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div -->		
		<!--wordpress footer-->
		<?php wp_footer(); ?>

	</body>
</html>