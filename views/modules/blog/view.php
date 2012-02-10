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