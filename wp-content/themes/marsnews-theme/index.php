<?php get_header(); ?>

<?php get_template_part('template-part', 'head'); ?>

<?php get_template_part('template-part', 'topnav'); ?>

<!-- start content container -->
<div class="row dmbs-content">

    <?php //left sidebar ?>
    <?php get_sidebar( 'left' ); ?>

    <div class="col-md-<?php devdmbootstrap3_main_content_width(); ?> dmbs-main">

        <?php

		//if this was a search we display a page header with the results count. If there were no results we display the search form.
		if (is_search()) :

			 $total_results = $wp_query->found_posts;

			 echo "<h2>" . sprintf( __('%s Search Results for "%s"','devdmbootstrap3'),  $total_results, get_search_query() ) . "</h2>";

			 if ($total_results == 0) :
				 get_search_form(true);
			 endif;

		endif;

        ?>

		<article><div class="article">

		<?php // theloop
		if ( have_posts() ) : while ( have_posts() ) : the_post();

			// single post
			if ( is_single() ) : ?>

				<div <?php post_class(); ?>>

					<h2><?php the_title(); ?> 
						<?php
						$posttags = get_the_tags(); 

						if ($posttags) {
						  foreach($posttags as $tag1) {
							$tag = $tag1->name;
						  }
						}

						$image = str_replace(' ', '', strtolower($tag)).".gif";
						$url = "http://www.marsnews.com/images/media";
						$path = "/home/jburk/marsnews.com/images/media";
						if(file_exists("$path/$image")) {
							echo "<img class=\"media-outlet-image\" src=\"$url/$image\" alt=\"$tag\" />";
						}
						else {
							echo "<span class=\"media-outlet\">$tag</span>";
						}
						?>
					</h2>

					<?php if ( has_post_thumbnail() ) : ?>
						<?php the_post_thumbnail(); ?>
						<div class="clear"></div>
					<?php endif; ?>

					<div class="post-content-inside">
						<?php the_content(); ?>
					</div>

					<?php wp_link_pages(); ?>
					<?php get_template_part('template-part', 'postmeta'); ?>
					<?php comments_template(); ?>

				</div>

				<?php
			// list of posts
			else : ?>
				<div <?php post_class(); ?>>
					<div class="post-time">
						<?php the_time('F jS, Y'); ?>
					</div>  
					<h2>
						<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'devdmbootstrap3' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a>  
						<?php
						$posttags = get_the_tags(); 

						if ($posttags) {
						  foreach($posttags as $tag1) {
							$tag = $tag1->name;
						  }
						}

						$image = str_replace(' ', '', strtolower($tag)).".gif";
						$url = "http://www.marsnews.com/images/media";
						$path = "/home/jburk/marsnews.com/images/media";
						if(file_exists("$path/$image")) {
							echo "<img class=\"media-outlet-image\" src=\"$url/$image\" alt=\"$tag\" />";
						}
						else {
							echo "<span class=\"media-outlet\">$tag</span>";
						}
						?>
					</h2>

					<?php if ( has_post_thumbnail() ) : ?>
					   <?php the_post_thumbnail(); ?>
						<div class="clear"></div>
					<?php endif; ?>
						<div class="post-content-inside">
							<?php the_content(); ?>
						</div>
					<?php wp_link_pages(); ?>
					<?php get_template_part('template-part', 'postmeta'); ?>
					<?php  if ( comments_open() ) : ?>
						   <div class="clear"></div>
						  <p class="text-right">
							  <a class="btn btn-success" href="<?php the_permalink(); ?>#comments"><?php comments_number(__('Leave a Comment','devdmbootstrap3'), __('One Comment','devdmbootstrap3'), '%' . __(' Comments','devdmbootstrap3') );?> <span class="glyphicon glyphicon-comment"></span></a>
						  </p>
					<?php endif; ?>
				</div>

			<?php  endif; ?>
		<?php endwhile; ?>
		</div></article>

		<div class="posts-nav-link">
			<?php posts_nav_link(); ?>
		</div>

		<?php else: ?>

				<?php get_404_template(); ?>

		<?php endif; ?>
   </div>

   <?php //get the right sidebar ?>
   <?php get_sidebar( 'right' ); ?>

</div>
<!-- end content container -->

<?php get_footer(); ?>
