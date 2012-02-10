{{theme:partial name="blog_content_head"}}

<div id="blog_main">
	<div class="blog_post">
		<!-- Post heading -->
		<div class="post_heading">
			<h2 class="post_title"><?php echo anchor('blog/' .date('Y/m', $post->created_on) .'/'. $post->slug, $post->title); ?></h2>
			<div class="post_date"><?php echo date('M d, Y',$post->created_on); ?> by&nbsp;</div> <div class="author"><?php echo anchor('user/' . $post->author_id, $post->display_name); ?></div>
		</div>
        <div class="clear"></div>
		<div class="post_body">
			<?php echo $post->body; ?>
		</div>
        <div class="clear5"></div>
        <div class="post_bottom">
            <div class="post_tweet"><a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo (base_url().'blog/' .date('Y/m', $post->created_on) .'/'. $post->slug)  ?>">Tweet</a></div>
            <div class="post_like"><div class="fb-like" data-href="<?php echo (base_url().'blog/' .date('Y/m', $post->created_on) .'/'. $post->slug)  ?>" data-layout="button_count"  data-send="false" data-width="150" data-show-faces="false"></div></div>
		</div>           
		<div class="clear"></div>        
</div>
	
<!-- FB comments social plugin -->
<div class="fb-comments" data-href="{{url:current}}" data-num-posts="10" data-width="626"></div>
<!-- FB comments social plugin -->
</div>
{{theme:partial name="blog_sidebar"}}

{{theme:partial name="blog_content_head"}}
{{ widgets:area slug="blog-sidebar" }}

<div class="blog_post">
	<!-- Post heading -->
	<div class="post_heading">
		<h4><?php echo $post->title; ?></h4>
		<?php if (isset($post->display_name)): ?>
		<p class="author"><?php echo lang('blog_written_by_label'); ?>: <?php echo anchor('user/' . $post->author_id, $post->display_name); ?></p>
		<?php endif; ?>
		<p class="post_date"><span class="post_date_label"><?php echo lang('blog_posted_label');?>: </span><?php echo format_date($post->created_on); ?></p>
		<?php if($post->category->slug): ?>
		<p class="post_category">
			<?php echo lang('blog_category_label');?>: <?php echo anchor('blog/category/'.$post->category->slug, $post->category->title);?>
		</p>
		<?php endif; ?>
	</div>
	<?php if($post->keywords): ?>
	<p class="post_keywords">
		<?php echo lang('blog_tagged_label');?>:
		<?php echo $post->keywords; ?>
	</p>
	<?php endif; ?>
	<div class="post_body">
		<?php echo $post->body; ?>
	</div>
</div>
<div class="social">
	<div class="fb-like" data-href="{{url:current}}" data-send="false" data-width="350" data-show-faces="false"></div>
</div>
	
<!-- FB comments social plugin -->
<div class="fb-comments" data-href="{{url:current}}" data-num-posts="10" data-width="470"></div>
<!-- FB comments social plugin -->