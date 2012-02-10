{{theme:partial name="blog_content_head"}}

<div id="blog_main">

<h2 id="page_title"><?php echo lang('blog_tagged_label').': '.str_replace('-', ' ', $tag); ?></h2>
<?php if (!empty($blog)): ?>
<?php foreach ($blog as $post): ?>
	<div class="blog_post">
		<!-- Post heading -->
		<div class="post_heading">
			<h2 class="post_title"><?php echo anchor('blog/' .date('Y/m', $post->created_on) .'/'. $post->slug, $post->title); ?></h2>
			<div class="post_date"><?php echo date('M d, Y',$post->created_on); ?> by&nbsp;</div> <div class="author"><?php echo anchor('user/' . $post->author_id, $post->display_name); ?></div>
		</div>
        <div class="clear"></div>		
		<div class="post_body">
			<?php echo $post->intro; ?>
		</div>
	</div>
<?php endforeach; ?>

<?php echo $pagination['links']; ?>

<?php else: ?>
	<p><?php echo lang('blog_currently_no_posts');?></p>
<?php endif; ?>
</div>
{{theme:partial name="blog_sidebar"}}