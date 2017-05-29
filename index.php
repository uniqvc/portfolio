<?php

	$uri = ltrim(str_replace(dirname($_SERVER['SCRIPT_NAME'])."/","",$_SERVER['REQUEST_URI']),'/'); 
	if( empty($uri) )
	{
		$uri = "home";
	}

	$file = sprintf('pages/%s.php',$uri);

	if( file_exists($file) )
	{
		require($file);
	}