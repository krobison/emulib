<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
	
	<?php
		$theme = Session::get('theme', 'flatly');
		$inverted = Session::get('inverted', 'false');
		
		$themes = array(
			"cerulean",
			"cosmo",
			"readable",
			"flatly",
			"slate",
			"spacelab",
			"united",
			"yeti"
		);
	?>
	
	{{HTML::style('css/bootstrap_'.$theme.'.min.css')}}

</head>

<body>
        
	@include('layouts.navbar')
		
	<section id="content">
		@yield('content')
	</section>
	
		
	{{HTML::script('//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js');}}
	{{HTML::script('js/bootstrap.min.js');}}
	
</body>
</html>
