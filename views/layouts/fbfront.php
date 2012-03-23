<!DOCTYPE html>
<html lang="en">
<head>
	{{ theme:partial name="metadata" }}
	{{ theme:js file="jquery.slides.js" }}
	<script type="text/javascript">
		(function($){$(document).ready(function(){
			
			$('#slides').slides({
				start:1,
				play:6000,
				generateNextPrev:true,
				generatePagination:false
			});
			
		});})(jQuery);
	</script>
	
	{{ theme:css file="facebook.css"}}
	
</head>

<body>
<div id="fb-root"></div>
{{ template:metadata in="body" }}

<?php if($is_admin):?>
<div class="fbapp-admin-bar">
	<?php if($event->status == 'inactive'):?>
		<span class="inactive">Inactive </span> <span>"contact <a href="http://thedchfoundation.org/about-us/staff/casey-johnson" target="_blank">Casey Johnson</a> for more info."</span>
	<?php else:?>
		<span class="active">Active </span>
	<?php endif;?>
	<a class="admin-btn edit" href="<?=site_url($this->module.'/facebookapp/edit')?>"><i>&nbsp;</i> Edit Event </a>
</div>
<?php endif;?>
<div class="container">
	<div class="grid">
		<div class="content fbapp-content">
			<div class="inner_body">
				<div class="fb-logo">&nbsp;&nbsp;</div>
			    <div class="fb-slider-holder">
			    	<div id="slides">
				    	<div class="slides_container">
						{{pages:chunk id="1" name="slider" multiple="true"}}
							<div class="slide">
								<div class="slide-wrapper">
									<div class="constraint">{{body}}</div>
								</div>
							</div>
						{{/pages:chunk }}
				    	</div>
			    	</div>
			    </div>
			    <div class="fb-slider-footer">&nbsp;&nbsp;</div>
		    	
		    	<h2> We Support The <strong>DCH Foundation</strong></h2>
		    	<hr/>
		    	<p class="dch-context">Visit The DCH Foundation on <a href="http://www.facebook.com/dchfoundationinc" target="_blank">Facebook</a> or their <a href="http://thedchfoundation.org" target="_blank">website</a> to learn more about them and upcoming events.</p>
		    	<div class="fbapp-facepile">
		    		<div class="fb-facepile" data-href="http://www.facebook.com/dchfoundationinc" data-size="large" data-max-rows="1" data-width="700"></div>
		    	</div>
		    	
		    	<div class="fbapp-links">
		    		<a href="http://www.facebook.com/dchfoundationinc" class="normal_btn" target="_blank"><span>Visit Their Fan Page</span></a>
		    		<a href="http://thedchfoundation.org" class="normal_btn" target="_blank"><span>Visit Their Website</span></a>
		    		<a href="http://thedchfoundation.org/event/agenda" class="normal_btn" target="_blank"><span>Upcoming Events</span></a>
		    	</div>
<?php if($event->status == 'active'):?>
		    	<h2>Support our upcoming <strong>event for The DCH Foundation</strong></h2>
		    	<hr/>
		    	{{ template:body }}
<?php endif;?>
			  </div>
			</div>
		</div><!-- end .content -->
	</div><!-- end .grid -->
</div><!-- end .container -->
 {{ template:metadata in="footer" }}
</body>
</html>