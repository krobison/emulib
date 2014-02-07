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
	
	<ol class="breadcrumb">
		<li><a href="#">Dashboard</a></li>
		<li><a href="#">Library</a></li>
		<li><a href="#">NES</a></li>
		<li class="active">Super Mario Bros.3</li>
	</ol>
  
	<ul class="nav nav-pills nav-stacked" id="leftnav">
		<li><a href="#">Thing</a></li>
		<li><a href="#">Stuff</a></li>
		<li><a href="#">Messages</a></li>
	</ul>
	
  
    <div class="panel panel-default" id="gamepanel">
		
		<div class="panel-body">
			<div>
			<div id="info">
				<div id="pictureholder">
					<div id="game_picture">
						<a class="thumbnail" href="assets/img/nes_supermariobros3.jpg" title="Super Mario Bros.3 Box Art">
							<img src="assets/img/nes_supermariobros3.jpg"/>
						</a>
					</div>
					<div id="game_thumbs" class="yoxview">
						<a class="thumbnail" href="assets/img/nes_cart_supermariobros3.jpg" id="game_artthumb" title="Super Mario Bros.3 Cartridge">
							<img src="assets/img/nes_cart_supermariobros3.jpg" alt="Super Mario Bros.3 Cartridge"/>
						</a>
						<a class="thumbnail" href="assets/img/nes_menu_supermariobros3.jpg" id="game_artthumb" title="Super Mario Bros.3 Menu">
							<img src="assets/img/nes_menu_supermariobros3.jpg"/>
						</a>
						<a class="thumbnail" href="assets/img/nes_game_supermariobros3.jpg" id="game_artthumb" title="Super Mario Bros.3 Gameplay">
							<img src="assets/img/nes_game_supermariobros3.jpg"/>
						</a>
					</div>
				</div>
				<div id="infotable">
					<table class="table">
						<tr class="tableheader success">
							<td colspan="2">Development</td>
						</tr>
						<tr>
							<td>Developer</td>
							<td>Nintendo R&D</td>
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
						<tr class="tableheader warning">
							<td colspan="2">Release</td>
						<tr>
						<tr>
							<td>Japan&nbsp;&nbsp;<img class="flag" src="assets/img/flag_japan.png"/></td>
							<td>October 23, 1988</td>
						</tr>
						<tr>
							<td>North America&nbsp;&nbsp;<img class="flag" src="assets/img/flag_usa.png"/></td>
							<td>February 12, 1990</td>
						</tr>
						<tr>
							<td>PAL&nbsp;&nbsp;<img class="flag" src="assets/img/flag_eu.png"/></td>
							<td>August 29, 1991</td>
						</tr>
						<tr class="tableheader danger">
							<td colspan="2">Gameplay</td>
						<tr>
						<tr>
							<td>Genre</td>
							<td>Platformer</td>
						</tr>
						<tr>
							<td>Players</td>
							<td>1-2</td>
						</tr>
					</table>
				</div>
			</div>
			</div>
			<div id="reader">
				<div id="buttonholder">
					<button type="button" class="btn btn-success btn-sm" id="b_configure"><span class="glyphicon glyphicon-book"></span>&nbsp;&nbsp;Add To Library</button>
					<button type="button" class="btn btn-info btn-sm" disabled="disabled" id="b_configure"><span class="glyphicon glyphicon-cog"></span>&nbsp;&nbsp;Configure</button>
					<button type="button" class="btn btn-danger btn-sm" disabled="disabled" id="b_configure"><span class="glyphicon glyphicon-play"></span>&nbsp;&nbsp;Launch</button>
				</div>
				<div class="page-header">
					<h3>NES Games <small>Super Mario Bros. 3</small><img class="header_thumb" src="assets/img/nes_thumb_supermariobros3.png"/></h3>
				</div>
					<p class="bodytext">
						Super Mario Bros. 3 is a platform video game developed and published by Nintendo for the Famicom/NES, and is the third game in the Super Mario series. The game was released in Japan in 1988, in the United States in 1990, and in Europe in 1991. Development was handled by Nintendo Entertainment Analysis and Development, led by Shigeru Miyamoto, who directed the game along with Takashi Tezuka.<br><br>
						The game focuses on Mario and his brother Luigi, who embark on a quest to save Princess Toadstool and the rulers of seven different kingdoms from the series' primary antagonist, Bowser, and his children, the Koopalings. The two must traverse a total of eight separate regions in order to restore order to the Mushroom World. Super Mario Bros. 3 builds on the gameplay of previous Mario games by introducing new power-ups used to augment character abilities, establishing several conventions that have also been featured in later titles of the franchise.<br><br>
					</p>
				<div class="page-header">
					<h4>Ratings</h4>
				</div>
				<div id="ratingsection">
					<div id="ratingtable">
						<table class="table">
							<tr class="tableheader active">
								<td colspan="2">Review Ratings</td>
							</tr>
							<tr>
								<td>Allgame</td>
								<td>&#9733;&#9733;&#9733;&#9733;&#9733;</td>
							</tr>
							<tr>
								<td>Gamespot</td>
								<td>9.0/10</td>
							</tr>
							<tr>
								<td>IGN</td>
								<td>9.5/10</td>
							</tr>
							<tr>
								<td>The Video Game Critic</td>
								<td>A+</td>
							</tr>
						</table>
					</div>
					<div id="safetytable">
						<table class="table">
							<tr class="tableheader active">
								<td colspan="4">Content Ratings</td>
							</tr>
							<tr>
								<td>ESRB</td>
								<td><img class="ratings" src="assets/img/esrb_e.png"/></td>
								<td>PEGI</td>
								<td><img class="ratings" src="assets/img/pegi_3.png"/></td>
							</tr>
							<tr>
								<td>CERO</td>
								<td><img class="ratings" src="assets/img/cero_a.png"/></td>
								<td>ACB</td>
								<td><img class="ratings" src="assets/img/acb_g.png"/></td>
							</tr>
						</table>
					</div>
				</div>
				<div class="page-header">
					<h4>Screenshots</h4>
				</div>
				<div id="screens">
					<a class="thumbnail" href="assets/img/nes_screen_supermariobros3_1.jpg" id="screenthumb" title="Super Mario Bros.3 W1-L2">
						<img src="assets/img/nes_screen_supermariobros3_1.jpg"/>
					</a>
				</div>
			</div>
		</div>
	<div>
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assets/js/jquery-2.0.3.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
	
	<script src="magpopup/jquery.magnific-popup.min.js"></script>
	
	<script>
		$('#pictureholder').magnificPopup({
			delegate: 'a', // child items selector, by clicking on it popup will open
			type: 'image',
			 zoom: {
				enabled: true, // By default it's false, so don't forget to enable it

				duration: 300, // duration of the effect, in milliseconds
				easing: 'ease-in-out', // CSS transition easing function 

				// The "opener" function should return the element from which popup will be zoomed in
				// and to which popup will be scaled down
				// By defailt it looks for an image tag:
				opener: function(openerElement) {
					// openerElement is the element on which popup was initialized, in this case its <a> tag
					// you don't need to add "opener" option if this code matches your needs, it's defailt one.
					return openerElement.is('img') ? openerElement : openerElement.find('img');
				}			
			},
			gallery:{enabled:true},
			titleSrc: 'title',
		});
		$('#screens').magnificPopup({
			delegate: 'a', // child items selector, by clicking on it popup will open
			type: 'image',
			 zoom: {
				enabled: true, // By default it's false, so don't forget to enable it

				duration: 300, // duration of the effect, in milliseconds
				easing: 'ease-in-out', // CSS transition easing function 

				// The "opener" function should return the element from which popup will be zoomed in
				// and to which popup will be scaled down
				// By defailt it looks for an image tag:
				opener: function(openerElement) {
					// openerElement is the element on which popup was initialized, in this case its <a> tag
					// you don't need to add "opener" option if this code matches your needs, it's defailt one.
					return openerElement.is('img') ? openerElement : openerElement.find('img');
				}			
			},
			gallery:{enabled:true},
			titleSrc: 'title',
		});
	</script>
	
	</body>
</html>