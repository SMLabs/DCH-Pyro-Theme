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

<h1> Photos from <strong>Our Events</strong> </h1>

<p>Many of our photo albums features pictures taken at our third party events. 
Where are fortunate to work with many generous groups in our fund rasing initiatives. 
To learn more about hosting third-party events, <a href="#">click here</a>.</p>

<section class="fbgal-section main">
	<div class="fbgal-main-links">
		<h3>Chose an Album</h3>
		<ul>
			<li><a href="<?php echo site_url($this->module) ?>">View All Galleries</a></li>
<?php foreach($albums as $album):?>
			<li><a href="<?php echo site_url($this->module.'/photos/'.$album->id) ?>"><?php echo $album->name ?></a></li>
<?php endforeach;?>
		</ul>
	</div>

	<div class="fbgal-main-albums">
		<ul>
<?php foreach($albums as $album):?>
			<li class="fbgal-thumb"> 
				<a href="<?php echo site_url($this->module.'/photos/'.$album->id) ?>">
					<img src="<?=site_url($this->module.'/thumb/?src='.$album->source.'&width=210&height=160')?>" class="fbgal-thumb-photo" />
					<span class="fbgal-thumb-overlay"> <img src="<?=image_url('zoom.png',$this->module)?>" class="fbgal-zoom-img" /> </span>
					<?php echo $album->name ?>
				</a>
			</li>
<?php endforeach;?>
		</ul>
	</div>
</section>

<div class="fbgal-main-footer">
	<a href="<?php echo site_url('event') ?>" class="normal_btn flr"><span>Return to Upcoming Events</span></a>
</div>