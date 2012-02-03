
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

<?=$this->load->view($this->config->item('module_name').'/details', array("events"=>$eventData),true);?>