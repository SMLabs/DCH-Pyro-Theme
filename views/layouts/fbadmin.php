<?php 
 // Nothing to see here move along! 
?>
<!doctype html>

<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]> <html class="no-js" lang="en"> 		   <![endif]-->

<head>
	
	<meta charset="utf-8">
	
	<base href="<?=base_url()?>" />

  	<!-- Mobile viewport optimized -->
  	<meta name="viewport" content="width=device-width,user-scalable=no">

  	<!-- CSS. No need to specify the media attribute unless specifically targeting a media type, leaving blank implies media=all -->
	<link href="<?=BASE_URI?>system/cms/themes/pyrocms/css/style.css" type="text/css" rel="stylesheet" />  	<!-- End CSS-->

	<!-- Googlelicious -->
	<link href='http://fonts.googleapis.com/css?family=Questrial' rel='stylesheet' type='text/css'>

	<!-- Load up some favicons -->
  	<link rel="shortcut icon" href="favicon.ico">
  	<link rel="apple-touch-icon" href="apple-touch-icon.png">
  	<link rel="apple-touch-icon" href="apple-touch-icon-precomposed.png">
  	<link rel="apple-touch-icon" href="apple-touch-icon-57x57-precomposed.png">
  	<link rel="apple-touch-icon" href="apple-touch-icon-72x72-precomposed.png">
  	<link rel="apple-touch-icon" href="apple-touch-icon-114x114-precomposed.png">

	<!-- Grab Google CDN's jQuery, with a protocol relative URL -->
  	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>

	<!-- fall back to local if offline -->
  	<script>window.jQuery || document.write('<script src="<?=BASE_URI?>system/cms/themes/pyrocms/js/jquery/jquery.min.js">\x3C/script>')</script>
	
	<!-- metadata needs to load before some stuff -->
	
<script type="text/javascript" src="<?=BASE_URI?>system/cms/themes/pyrocms/js/jquery/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?=BASE_URI?>system/cms/themes/pyrocms/js/jquery/jquery.colorbox.min.js"></script>
<script type="text/javascript" src="<?=BASE_URI?>system/cms/themes/pyrocms/js/codemirror/codemirror.js"></script>
<script type="text/javascript" src="<?=BASE_URI?>system/cms/themes/pyrocms/js/codemirror/mode/css/css.js"></script>
<script type="text/javascript" src="<?=BASE_URI?>system/cms/themes/pyrocms/js/codemirror/mode/htmlmixed/htmlmixed.js"></script>
<script type="text/javascript" src="<?=BASE_URI?>system/cms/themes/pyrocms/js/codemirror/mode/javascript/javascript.js"></script>
<script type="text/javascript" src="<?=BASE_URI?>system/cms/themes/pyrocms/js/codemirror/mode/markdown/markdown.js"></script>
<script type="text/javascript" src="<?=BASE_URI?>system/cms/themes/pyrocms/js/plugins.js"></script>

<script type="text/javascript">
	pyro = { 'lang' : {} };
	var APPPATH_URI					= "<?php echo APPPATH_URI;?>";
	var SITE_URL					= "<?php echo rtrim(site_url(), '/').'/';?>";
	var BASE_URL					= "<?php echo BASE_URL;?>";
	var BASE_URI					= "<?php echo BASE_URI;?>";
	var UPLOAD_PATH					= "<?php echo UPLOAD_PATH;?>";
	var DEFAULT_TITLE				= "<?php echo addslashes($this->settings->site_name); ?>";
	// Deprecated
	var DIALOG_MESSAGE				= "<?php echo lang('global:dialog:delete_message'); ?>";
	pyro.admin_theme_url			= "<?php echo BASE_URL . 'system/cms/themes/pyrocms'; ?>";
	pyro.apppath_uri				= "<?php echo APPPATH_URI; ?>";
	pyro.base_uri					= "<?php echo BASE_URI; ?>";
	pyro.lang.remove				= "<?php echo lang('global:remove'); ?>"
	pyro.lang.delete				= "<?php echo lang('global:delete'); ?>"
	pyro.lang.dialog_message 		= DIALOG_MESSAGE;
</script>

<script type="text/javascript" src="<?=BASE_URI?>system/cms/themes/pyrocms/js/scripts.js"></script><link href="<?=BASE_URI?>system/cms/themes/pyrocms/css/plugins.css" type="text/css" rel="stylesheet" /><link href="<?=BASE_URI?>system/cms/themes/pyrocms/css/jquery/colorbox.css" type="text/css" rel="stylesheet" /><link href="<?=BASE_URI?>system/cms/themes/pyrocms/css/codemirror.css" type="text/css" rel="stylesheet" />
<style>section#content {margin-top: 170px!important;}</style>

		<link href="<?=BASE_URI?>addons/shared_addons/modules/event/css/admin.css" type="text/css" rel="stylesheet" />
		<link href="<?=BASE_URI?>addons/shared_addons/modules/event/css/event.css" type="text/css" rel="stylesheet" />
		<link href="<?=BASE_URI?>addons/shared_addons/modules/event/css/jquery-ui-1.8.18.custom.css" type="text/css" rel="stylesheet" />
		<script type="text/javascript" src="<?=BASE_URI?>addons/shared_addons/modules/event/js/jquery-ui-1.8.18.custom.min.js"></script>
		<script type="text/javascript" src="<?=BASE_URI?>addons/shared_addons/modules/event/js/jquery.validate.js"></script>
		<script type="text/javascript" src="<?=BASE_URI?>addons/shared_addons/modules/event/js/form.js"></script>
		<script type="text/javascript" src="<?=BASE_URI?>addons/shared_addons/modules/event/js/facebook.js"></script>
		<script type="text/javascript" src="<?=BASE_URI?>system/cms/themes/pyrocms/js/ckeditor/ckeditor.js"></script>
		<script type="text/javascript" src="<?=BASE_URI?>system/cms/themes/pyrocms/js/ckeditor/adapters/jquery.js"></script>
<script type="text/javascript">

	var instance;

	function update_instance()
	{
		instance = CKEDITOR.currentInstance;
	}

	(function($) {
		$(function(){

			pyro.init_ckeditor = function(){
				$('textarea.wysiwyg-simple').ckeditor({
					toolbar: [
												['Bold', 'Italic', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink']
					  ],
										width: '99%',
					height: 100,
					dialog_backgroundCoverColor: '#000',
					defaultLanguage: 'en',
					language: 'en'
				});
	
				$('textarea.wysiwyg-advanced').ckeditor({
					toolbar: [
						['Maximize'],
						['pyroimages', 'pyrofiles'],
						['Cut','Copy','Paste','PasteFromWord'],
						['Undo','Redo','-','Find','Replace'],
						['Link','Unlink'],
						['Table','HorizontalRule','SpecialChar'],
						['Bold','Italic','StrikeThrough'],
						['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock','-','BidiLtr','BidiRtl'],
						['Format', 'FontSize', 'Subscript','Superscript', 'NumberedList','BulletedList','Outdent','Indent','Blockquote'],
						['ShowBlocks', 'RemoveFormat', 'Source']
					],
					extraPlugins: 'pyroimages,pyrofiles',
					width: '99%',
					height: 400,
					dialog_backgroundCoverColor: '#000',
					removePlugins: 'elementspath',
					defaultLanguage: 'en',
					language: 'en'
				});
			};
			pyro.init_ckeditor();

		});
	})(jQuery);
</script>



{{ theme:css file="facebook.css"}}

<style>

	html,body{
		background-color:#FFF;
		overflow-y:visible;
		height:auto;
		margin:0;
		padding:0;
	}
		
	form{
		position:relative;
		overflow:hidden;
		width:754px;
		margin:0 auto;
		padding-left:1px;
	}
	
	table td.actions{
		width:116px;
	}
	
	table tbody.links td.url{
		
	}
	
	a.test, a.testlink{
		display:none;
	}
	
	div.floating-footer{
		position:relative;
		padding:20px 20px 120px;
		top:auto;
		bottom:auto;
		clear:both;
		z-index:0;
		background:#333;
		height:auto;
	}
	
	section.description{
		min-height:434px;
	}
	
	div.footer-wrapper{
		overflow:hidden;
		padding-top:20px;
		clear:left;
	}
	
</style>

</head>

<body>
<div id="fb-root"></div>
<div class="fbapp-admin-bar">
	<a class="view" href="<?=site_url($this->module.'/facebookapp')?>"> View Tab </a>
</div>

{{template:body}}

<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6. chromium.org/developers/how-tos/chrome-frame-getting-started -->
<!--[if lt IE 7 ]>
<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
<![endif]-->
  	
</body>
</html>