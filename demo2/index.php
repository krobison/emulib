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
				<li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span> Home</a></li>
				<li><a href="#"><span class="glyphicon glyphicon-comment"></span> News</a></li>
				<li><a href="#"><span class="glyphicon glyphicon-question-sign"></span> About</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#"><span class="glyphicon glyphicon-user"></span> Dashboard</a></li>
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
  
	<div class="page-header">
		<h3>NES Games <small>Super Mario Bros. 3</small><img class="header_thumb" src="assets/img/nes_thumb_supermariobros3.png"/></h3>
	</div>
  
	<ul class="nav nav-pills nav-stacked" id="leftnav">
		<li><a href="#">Thing</a></li>
		<li><a href="#">Stuff</a></li>
		<li><a href="#">Messages</a></li>
	</ul>
  
    <div class="panel panel-default" id="gamepanel">
		
		<div class="panel-body">
			<div id="pictureholder">
				<div id="game_picture">
					<a class="thumbnail" href="assets/img/nes_supermariobros3.jpg">
						<img src="assets/img/nes_supermariobros3.jpg"/>
					</a>
				</div>
				<div id="game_thumbs">
					<a class="thumbnail" href="assets/img/nes_cart_supermariobros3.jpg" id="game_artthumb">
						<img src="assets/img/nes_cart_supermariobros3.jpg"/>
					</a>
					<a class="thumbnail" href="assets/img/nes_menu_supermariobros3.jpg" id="game_artthumb">
						<img src="assets/img/nes_menu_supermariobros3.jpg"/>
					</a>
					<a class="thumbnail" href="assets/img/nes_game_supermariobros3.jpg" id="game_artthumb">
						<img src="assets/img/nes_game_supermariobros3.jpg"/>
					</a>
				</div>
			</div>
			<div id="infotable">
				<table class="table table-striped">
					<tr>
						<td>Developer</td>
						<td>Nintendo R&D4</td>
					</tr>
					<tr>
						<td>Publisher</td>
						<td>Nintendo</td>
					</tr>
					<tr>
						<td>Producer</td>
						<td>Shigeru Miyamoto</td>
					</tr>
					<tr>
						<td>Series</td>
						<td>Super Mario</td>
					</tr>
				</table>
			</div>
		</div>
	<div>
	
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assets/js/jquery-2.0.3.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
	
  </body>
</html>