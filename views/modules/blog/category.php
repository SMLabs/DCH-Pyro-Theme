{{theme:partial name="blog_content_head"}}
<div id="blog_main">
<h2 id="page_title"><?php echo $category->title; ?></h2>
<?php if (!empty($blog)): ?>
<?php foreach ($blog as $post): ?>
	<div class="blog_post">
		<!-- Post heading -->
		<div class="post_heading">
			<h2 class="post_title"><?php echo anchor('blog/' .date('Y/m', $post->created_on) .'/'. $post->slug, $post->title); ?></h2>
			<div class="post_date"><?php echo date('M d, Y',$post->created_on); ?> by&nbsp;</div> <div class="author"><?php echo anchor('user/' . $post->author_id, $post->display_name); ?></div>
		</div>
		<div class="post_body">
			<?php echo $post->intro; ?>
		</div>
        <div class="clear5"></div>
        <div class="post_bottom">
            <div class="post_tweet"><a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo (base_url().'blog/' .date('Y/m', $post->created_on) .'/'. $post->slug)  ?>">Tweet</a></div>
            <div class="post_like"><div class="fb-like" data-href="<?php echo (base_url().'blog/' .date('Y/m', $post->created_on) .'/'. $post->slug)  ?>" data-layout="button_count"  data-send="false" data-width="150" data-show-faces="false"></div></div>
			<div class="post_read_full"><?php echo anchor('blog/' .date('Y/m', $post->created_on) .'/'. $post->slug, "Read Full Article"); ?></div>
		</div>           
		<div class="clear"></div>          
	</div>
<?php endforeach; ?>

<?php echo $pagination['links']; ?>

<?php else: ?>
	<p><?php echo lang('blog_currently_no_posts');?></p>
<?php endif; ?>
</div>
{{theme:partial name="blog_sidebar"}}