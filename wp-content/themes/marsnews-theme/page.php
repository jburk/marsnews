<?php get_header(); ?>

<?php get_template_part('template-part', 'head'); ?>

<?php get_template_part('template-part', 'topnav'); ?>

<!-- start content container -->
<div class="row dmbs-content">

    <?php //left sidebar ?>
    <?php get_sidebar( 'left' ); ?>

    <div class="col-md-<?php devdmbootstrap3_main_content_width(); ?> dmbs-main">

        <?php // theloop
        if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <h2><?php the_title() ;?> &nbsp;
<?php
$posttags = get_the_tags(); 

if ($posttags) {
  foreach($posttags as $tag1) {
	$tag = $tag1->name;
  }
}

$image = strtolower($tag).".gif";
$url = "http://www.marsnews.com/images/media";
//if(file_exists("$url/$image")) {
	echo "<img class=\"media-outlet-image\" src=\"$url/$image\" alt=\"$tag\" />";
//}
//else {
//echo "<span class=\"media-outlet\">$tag</span>";
//}
?>
</h2>
	    <div class="post-content-inside">
		<?php if ( has_post_thumbnail() ) {
			the_post_thumbnail();
		} ?> 
	            <?php the_content(); ?>
	    </div>
            <?php wp_link_pages(); ?>
            <?php comments_template(); ?>

        <?php endwhile; ?>
        <?php else: ?>

            <?php get_404_template(); ?>

        <?php endif; ?>

    </div>

    <?php //get the right sidebar ?>
    <?php get_sidebar( 'right' ); ?>

</div>
<!-- end content container -->

<?php get_footer(); ?>
