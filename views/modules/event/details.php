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
						<p>
							<?=$event->description ?> 
							<div class="agenda-spon-heading">Sponsors</div>
							<div class="agenda-spon-list"><?=$event->sponsors?></div>
							<div class="agenda-view-heading">View Event on:</div>
							<div class="agenda-view-buttons">
								<a href="<?=CheckHTTP_InURL($event->eventbrite_event_url)?>"><div class="orange_btn">Eventbrite</div></a>
								<a href="<?=CheckHTTP_InURL($event->facebook_event_url)?>"><div class="facebook_btn">facebook</div></a>
							</div>
						</p>
					</article>
            	</div>
<?php endforeach;?>