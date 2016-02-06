<?php
	header("Content-type: text/css; charset: UTF-8");
	$filename = (strtolower($_GET['page']));
	//must require these
	@require('layout.css');
	@require('nav.css');
	@require('type.css');
	//home page
	if($filename == 'info'){
		require('info.css');
	}
	if($filename == 'gallery'){
		require('gallery.css');
	}
	if($filename == 'contact'){
		require('contact.css');
	}	
?>