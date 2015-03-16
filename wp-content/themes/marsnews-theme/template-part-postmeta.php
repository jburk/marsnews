<?php global $dm_settings; ?>
<?php if ($dm_settings['show_postmeta'] != 0) : ?>
 <div class="post-tags">
    <?php // if( has_tag() ) : ?>
	<?php // the_tags("From: "); ?> &nbsp;&nbsp;&nbsp;
    <?php // endif; ?>
    Posted by <strong><?php the_author(); ?></strong> 
    <?php _e('to','devdmbootstrap3'); ?>: <strong><?php the_category(', '); ?></strong>
    <span class="text-right"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
    <?php edit_post_link(__('Edit','devdmbootstrap3')); ?>
    </span>
 </div>
<?php endif; ?>