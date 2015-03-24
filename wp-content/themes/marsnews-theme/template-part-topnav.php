<?php if ( has_nav_menu( 'main_menu' ) ) : ?>

    <div class="row dmbs-top-menu">
        <nav class="navbar navbar-inverse" role="navigation">
            <div class="container">
                <div class="col-md-8 navbar-header">

                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-1-collapse">
                        <span class="sr-only"><?php _e('Toggle navigation','devdmbootstrap3'); ?></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                <?php
                wp_nav_menu( array(
                        'theme_location'    => 'main_menu',
                        'depth'             => 2,
                        'container'         => 'div',
                        'container_class'   => 'collapse navbar-collapse navbar-1-collapse',
                        'menu_class'        => 'nav navbar-nav',
                        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                        'walker'            => new wp_bootstrap_navwalker())
                );
                ?>

                </div>

		<div class="col-md-4 header-search-box">
		<span class="rss-button" style="float:right;padding-left:10px;">
			<a href="<?php bloginfo('rss2_url'); ?>"><img src="/images/rss-icon-hi.png" alt="RSS" width="33"></a>
		</span>
<form role="search" method="get" class="search-form form" action="<?php echo esc_url(home_url('/')); ?>">
	<label for="form-search-input" class="sr-only"><?php _ex('Search for', 'label', 'bootstrap-basic'); ?></label>
	<span class="input-group">
		<input type="search" id="form-search-input" class="form-control" placeholder="<?php echo esc_attr_x('Search MarsNews.com', 'placeholder', 'bootstrap-basic'); ?>" value="<?php echo esc_attr(get_search_query()); ?>" name="s" title="<?php echo esc_attr_x('Search for:', 'label', 'bootstrap-basic'); ?>">
		<span class="input-group-btn">
			<button type="submit" class="btn btn-default"><?php esc_html_e('Search', 'bootstrap-basic'); ?></button>
		</span>
	
	</span>
</form>

		</div>
            </div>
        </nav>
    </div>

<?php endif; ?>