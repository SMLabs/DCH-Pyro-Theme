<!-- theme header -->
<div class="pt_banner">
	<h3 class="pt_heading">DCH Blog</h3>
	<div class="speedbar">
		<nav>
			<ul>
				<li><a href="<?=site_url()?>">RSS Feed</a></li>
			{{navigation:links group="events"}}
                <li>l</li>
				<li class="{{class}}"><a href="{{url}}">{{title}}</a></li>
			{{/navigation:links}}
			
            </ul>
		</nav>
	</div>
</div>
<!-- theme header -->

<div class="blog_post">
	<!-- Post heading -->
	<div class="post_heading">
		<h4><?php echo $post->title; ?></h4>
		<?php if (isset($post->display_name)): ?>
		<p class="author"><?php echo lang('blog_written_by_label'); ?>Hello: <?php echo anchor('user/' . $post->author_id, $post->display_name); ?></p>
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