<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Index</title>
	
	<?php
		if (!isset($_GET["theme"])){
			$theme="default";
			$css = "assets/css/bootstrap.min.css";
		}else{
			$theme=$_GET["theme"];
			$css = "assets/css/bootstrap_{$theme}.min.css";
		}
		if (!isset($_GET["navbar"])){
			$navbar="normal";
		}else{
			$navbar=$_GET["navbar"];
		}
	?>

    <!-- Bootstrap -->
    <link href="<?= $css ?>" rel="stylesheet">
	<link href="nes.css" rel="stylesheet">
	
	<link href="magpopup/magnific-popup.css" rel="stylesheet">
	<link type="text/css" href="jplayer/skins/blue.monday/jplayer.blue.monday.css" rel="stylesheet" />
	
  </head>
  
  <body>
  
	<?php
		if ($navbar == "normal"){
			echo "<nav class=\"navbar navbar-default\" role=\"navigation\">";
		}else{
			echo "<nav class=\"navbar navbar-inverse\" role=\"navigation\">";
		}
	?>
	  <div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		  <a class="navbar-brand" href="#" style="margin-left:16px;">EmuLib</a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span>&nbsp;&nbsp;Home</a></li>
				<li><a href="#"><span class="glyphicon glyphicon-comment"></span>&nbsp;&nbsp;News</a></li>
				<li><a href="#"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;&nbsp;Browse</a></li>
				<li><a href="#"><span class="glyphicon glyphicon-question-sign"></span>&nbsp;&nbsp;About</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li class="active"><a href="#"><span class="glyphicon glyphicon-user"></span> Kolten Robison</a></li>
				<form class="navbar-form navbar-left" role="search">
					<div class="form-group input-group-sm">
						<input type="text" class="form-control" placeholder="Search" style="width:256px;margin-top:4px;">
					</div>
				<button type="submit" class="btn btn-success btn-sm" style="margin-top:4px;"> <span class="glyphicon glyphicon-search"></span></button>
				</form>
				<li class="dropdown">
				 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Settings <b class="caret"></b></a>
				  <ul class="dropdown-menu">
					<li><a href="#">Account Settings</a></li>
					<?php
						if ($navbar != "invert"){
							echo "<li><a href=\"index.php?theme={$theme}&navbar=invert\">Alternative Navbar</a></li>";
						}else{
							echo "<li><a href=\"index.php?theme={$theme}&navbar=normal\">Alternative Navbar <span class=\"glyphicon glyphicon-ok\"></span></a></li>";
						}
					?>
					
				  </ul>
				</li>
				<li class="dropdown">
				 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Theme <b class="caret"></b></a>
				  <ul class="dropdown-menu">
					<li><a href="?theme=default&navbar=<?=$navbar?>">Default <?php
						if ($theme == "default"){
							echo "<span class=\"glyphicon glyphicon-ok\"></span>";
						}
					?></a></li>
					<li class="divider"></li>
					<li><a href="?theme=flatly&navbar=<?=$navbar?>">Flatly <?php
						if ($theme == "flatly"){
							echo "<span class=\"glyphicon glyphicon-ok\"></span>";
						}
					?></a></li>
					<li><a href="?theme=cerulean&navbar=<?=$navbar?>">Cerulean <?php
						if ($theme == "cerulean"){
							echo "<span class=\"glyphicon glyphicon-ok\"></span>";
						}
					?></a></li>
					<li><a href="?theme=cosmo&navbar=<?=$navbar?>">Cosmo <?php
						if ($theme == "cosmo"){
							echo "<span class=\"glyphicon glyphicon-ok\"></span>";
						}
					?></a></li>
					<li><a href="?theme=readable&navbar=<?=$navbar?>">Readable <?php
						if ($theme == "readable"){
							echo "<span class=\"glyphicon glyphicon-ok\"></span>";
						}
					?></a></li>
					<li><a href="?theme=slate&navbar=<?=$navbar?>">Slate <?php
						if ($theme == "slate"){
							echo "<span class=\"glyphicon glyphicon-ok\"></span>";
						}
					?></a></li>
					<li><a href="?theme=spacelab&navbar=<?=$navbar?>">Spacelab <?php
						if ($theme == "spacelab"){
							echo "<span class=\"glyphicon glyphicon-ok\"></span>";
						}
					?></a></li>
					<li><a href="?theme=united&navbar=<?=$navbar?>">United <?php
						if ($theme == "united"){
							echo "<span class=\"glyphicon glyphicon-ok\"></span>";
						}
					?></a></li>
					<li><a href="?theme=yeti&navbar=<?=$navbar?>">Yeti <?php
						if ($theme == "yeti"){
							echo "<span class=\"glyphicon glyphicon-ok\"></span>";
						}
					?></a></li>
				  </ul>
				</li>
				<li><a href="#"> Logout</a></li>
			</ul>
		</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
	
	<ol class="breadcrumb">
		<li><a href="#">Dashboard</a></li>
		<li><a href="#">Library</a></li>
		<li><a href="#">NES</a></li>
		<li class="active">Super Mario Bros. 3</li>
	</ol>
  
	<div id="affixleft" data-spy="affix" data-offset-top="0">
		<ul class="nav nav-pills nav-stacked" id="leftnav">
			<li><a href="#"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Dashboard</a></li>
			<li><a href="library.php?theme=<?=$theme?>&navbar=<?=$navbar?>"><span class="glyphicon glyphicon-book"></span>&nbsp;&nbsp;Library</a></li>
			<li><a href="#"><span class="glyphicon glyphicon-comment"></span>&nbsp;&nbsp;Messages</a></li>
		</ul>
	</div>
	
  
    <div class="panel panel-default" id="gamepanel">
		<a href="index.php?theme=<?=$theme?>&navbar=<?=$navbar?>">Super Mario Bros. 3</a>
		<br>
		<a href="nes_supermariobros2.php?theme=<?=$theme?>&navbar=<?=$navbar?>">Super Mario Bros. 2</a>
		
	<div>
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
	
	</body>
</html>