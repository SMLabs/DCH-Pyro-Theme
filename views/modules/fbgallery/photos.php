<script type="text/javascript" charset="utf-8">
	(function($){// encapsulated for scope protection
		$(document).ready(function(){
			$("a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'fast',slideshow:10000, hideflash: true});
			var albums = Array();
			<?php foreach($albums as $k=>$v){ ?>
				albums[<?php echo $k ?>] = '<?php echo $v->id  ?>'; <?php echo "\n"; ?>
			<?php }?>
			var current_index  = albums.indexOf("<?php echo $this->uri->segment(3) ?>");
			var next = current_index+1;
		})
	})(jQuery);
</script>

<!-- theme header -->

<div class="pt_banner">
  <h3 class="pt_heading">Events <strong>Gallery</strong></h3>
  <div class="speedbar">
    <nav>
      <ul>
        <li><a href="<?=site_url()?>">Back to Homepage</a></li>
        {{navigation:links group="events"}}
        <li>l</li>
        <li class="{{class}}"><a href="{{url}}">{{title}}</a></li>
        {{/navigation:links}}
      </ul>
    </nav>
  </div>
</div>

<section class="fbgal-section album">
	<div class="fbgal-album-navigation">
		<div class="fbgal-album-back"> <a href="<?php echo site_url('fbgallery') ?>" class="normal_btn fll"><span>View All Galleries</span></a> </div>
		<div class="fbgal-album-paging flr">
			<?=$pagination?>
		</div>
	</div>
	
	<h1><?php echo $album->name ?></h1>
	
	<div class="fbgal-album-photos">
	  <div class="fbgal-album-photos-pad">
	    <ul>
	<?php foreach($photos as $photo):?>
			<li class="fbgal-thumb">
				<a href="<?php echo $photo->source ?>" rel="prettyPhoto[gallery]"> <img src="<?=site_url($this->module.'/thumb/?src='.$photo->source.'&width=210&height=160')?>" class="fbgal-thumb-photo"  />
					<span class="fbgal-thumb-overlay"> <img src="<?=image_url('zoom.png',$this->module)?>" class="fbgal-zoom-img" /> </span>
		        </a>
			</li>
	<?php endforeach;?>
	    </ul>
	  </div>
	</div>
</section>