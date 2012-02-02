
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

<h1>
Calender <strong>Agenda View</strong>
<div class="cal-options">
	<a class="cal-button" href="<?php echo site_url($this->config->item('module_name') . '/calendar'); ?>"><span>Calendar View</span></a>
</div>
</h1>
<?php if( !empty( $eventData ) ): $index=0; $total=count($eventData);?>
<?php 	foreach( $eventData as $keys => $event ):?>
	<div class="postings<?=(++$index==$total)?' last':''?>">
		<div class="a_date">
			<div class="a_date_text">
				<div class="day"><?= date('l',strtotime($event->event_date))?></div>
				<div class="month"><?=date('F d,Y',strtotime($event->event_date))?></div>
				<div class="time"><?=Time24hFormat_Into_AMPMTime($event->start_time)?> - <?= Time24hFormat_Into_AMPMTime($event->end_time)?></div>
			</div>
		</div>
			
		<article class="a_detail">
			<header><h2 class="posting_hdr"><?=$event->name?> </h2></header>
			<p>
				<?=$event->description ?> 
				<div class="a_detail_text01">Sponsors</div>
				<div class="a_detail_text02"><?=$event->sponsors?></div>
				<div class="a_detail_text01">View Event on:</div>
				<div class="a_detail_btn">
					<a href="<?=CheckHTTP_InURL($event->eventbrite_event_url)?>"><div class="orange_btn">Eventbrite</div></a>
					<a href="<?=CheckHTTP_InURL($event->facebook_event_url)?>"><div class="facebook_btn">facebook</div></a>
				</div>
			</p>
		</article>
	</div>
<?php 	endforeach;?>
<?php endif;?>