<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
	
	<?php
		$theme = Session::get('theme', 'flatly');
		$inverted = Session::get('inverted', 'false');
		
		$themes = array(
			"cerulean",
			"cosmo",
			"cupid",
			"readable",
			"flatly",
			"lumen",
			"slate",
			"spacelab",
			"superhero",
			"united",
			"yeti"
		);
	?>
	
	{{HTML::style('css/bootstrap_'.$theme.'.min.css')}}
	
	{{HTML::script('//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js');}}
	{{HTML::script('js/bootstrap.min.js');}}

</head>

<body>
        
	@include('layouts.navbar')
		
	<section id="content">
		@yield('content')
	</section>
		
</body>
</html>
