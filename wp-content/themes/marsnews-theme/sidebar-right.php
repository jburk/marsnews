<?php
if ( is_front_page() ) {
    global $dm_settings;
    if ($dm_settings['right_sidebar'] != 0) : ?>
    <div class="col-md-<?php echo $dm_settings['right_sidebar_width']; ?> dmbs-right">
        <?php //get the right sidebar
        dynamic_sidebar( 'Right Sidebar' ); ?>
    </div>
<?php endif;
} else { ?>
	<div class="col-md-2 dmbs-right">
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<!-- Responsive -->
		<ins class="adsbygoogle"
		     style="display:block"
		     data-ad-client="ca-pub-0216514216797313"
		     data-ad-slot="9655675945"
		     data-ad-format="auto"></ins>
		<script>
		(adsbygoogle = window.adsbygoogle || []).push({});
		</script>
	</div>
<?php } ?>