<!-- theme header -->
<div class="pt_banner">
	<h3 class="pt_heading">Events</h3>
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
<!-- theme header -->

<?php
	$total = count($events);
	$index = 0;
?>
<div class="cal-agenda-list">
<?php foreach( $events as $keys => $event ):?>
				<div class="agenda-listing<?=(++$index==$total)?' last':''?>">
					<div class="agenda-date">
						<div class="agenda-date-wrapper">
							<div class="agenda-day"><?= date('l',strtotime($event->event_date))?></div>
							<div class="agenda-month"><?=date('F d,Y',strtotime($event->event_date))?></div>
							<div class="agenda-time"><?=Time24hFormat_Into_AMPMTime($event->start_time)?> - <?= Time24hFormat_Into_AMPMTime($event->end_time)?></div>
						</div>
					</div>
					
					<article class="agenda-details">
						<header><h2 class="agenda-header"><?=$event->name?> </h2></header>
						<p><?=$event->description ?></p>
						
	<?php if(count($event->sponsors) > 0):?>
						<div class="agenda-section agenda-sponsors">
							<div class="agenda-spon-heading">Sponsors</div>
							<ul class="agenda-spon-list">
			<?php foreach($event->sponsors as $sponsor):?>
								<li>
									<?php if($sponsor->url!=''):?>
										<a href="<?=$sponsor->url?>" target="_blank"><span><?=$sponsor->name?></span></a>
									<?php else:?>
										<a><span><?=$sponsor->name?></span></a>								
									<?php endif;?>
								</li>
			<?php endforeach;?>
							</ul>
						</div>
	<?php endif;?>
	
	<?php if(count($event->links) > 0):?>
						<div class="agenda-section agenda-links">
							<div class="agenda-view-heading">Event Links:</div>
							<div class="agenda-view-buttons">
		<?php foreach($event->links as $link):?>
								<a class="agenda-event-link <?=$link->type?>" href="<?=$link->url?>" target="_blank"><span><?=$link->text?></span></a>
		<?php endforeach;?>
							</div>
						</div>
	<?php endif;?>
						
					</article>
            	</div>
<?php endforeach;?>
</div>