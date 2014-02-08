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
		
		<div class="panel-body">
			<div>
			<div id="info">
				<div id="pictureholder">
						<a class="thumbnail" href="assets/img/nes_supermariobros3.jpg" title="Super Mario Bros.3 Box Art">
							<img src="assets/img/nes_supermariobros3.jpg"/>
						</a>
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
							<td>North America&nbsp;&nbsp;<img class="flag" src="assets/img/flag_USA.png"/></td>
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
						<tr class="tableheader active">
							<td colspan="2">Game Media</td>
						<tr>
						<tr>
							<td>Cartridge</td>
							<td id="mediacart">
								<a id="media" class="thumbnail" href="assets/img/nes_cart_supermariobros3.jpg" title="Super Mario Bros.3 Cartridge">
									<img src="assets/img/nes_cart_supermariobros3.jpg"/>
								</a>
							</td>
						</tr>
						<tr>
							<td>Manual</td>
							<td>
								<a id="media" class="thumbnail" href="assets/img/nes_manual_supermariobros3.pdf" title="Super Mario Bros.3 Cartridge">
									<img src="assets/img/nes_manthumb_supermariobros3.jpg"/>
								</a>
							</td>
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
								<td class="goodRating">&#9733;&#9733;&#9733;&#9733;&#9733;</td>
							</tr>
							<tr>
								<td>Gamespot</td>
								<td class="goodRating">9.0/10</td>
							</tr>
							<tr>
								<td>IGN</td>
								<td class="goodRating">9.5/10</td>
							</tr>
							<tr>
								<td>The Video Game Critic</td>
								<td class="goodRating">A+</td>
							</tr>
						</table>
					</div>
					<div id="safetytable">
						<table class="table">
							<tr class="tableheader active">
								<td colspan="6">Content Ratings</td>
							</tr>
							<tr>
								<td>ESRB</td>
								<td><img class="ratings" src="assets/img/esrb_e.png"/></td>
								<td>PEGI</td>
								<td><img class="ratings" src="assets/img/pegi_3.png"/></td>
								<td>CERO</td>
								<td><img class="ratings" src="assets/img/cero_a.png"/></td>
							</tr>
							<tr>
								<td>ACB</td>
								<td><img class="ratings" src="assets/img/acb_g.png"/></td>
								<td>USK</td>
								<td><img class="ratings" src="assets/img/usk_0.png"/></td>
							</tr>
						</table>
					</div>
				</div>
				<div class="page-header">
					<h4>Screenshots</h4>
				</div>
				<div id="screens">
					<!--<div class="col-xs-6 col-md-2">
						<a class="thumbnail" href="assets/img/nes_screen_supermariobros3_1.jpg" id="screenthumb" title="Mario on an Airship">
							<img src="assets/img/nes_screen_supermariobros3_1.jpg"/>
						</a>
					</div>
					<div class="col-xs-6 col-md-2">
						<a class="thumbnail" href="assets/img/nes_screen_supermariobros3_2.jpg" id="screenthumb" title="Super Mario Bros.3 W1-L3">
							<img src="assets/img/nes_screen_supermariobros3_2.jpg"/>
						</a>
					</div>
					<div class="col-xs-6 col-md-2">
						<a class="thumbnail" href="assets/img/nes_screen_supermariobros3_3.jpg" id="screenthumb" title="Mario in the Desert">
							<img src="assets/img/nes_screen_supermariobros3_3.jpg"/>
						</a>
					</div>
					<div class="col-xs-6 col-md-2">
						<a class="thumbnail" href="assets/img/nes_screen_supermariobros3_4.jpg" id="screenthumb" title="Big World">
							<img src="assets/img/nes_screen_supermariobros3_4.jpg"/>
						</a>
					</div>
					<div class="col-xs-6 col-md-2">
						<a class="thumbnail" href="assets/img/nes_screen_supermariobros3_5.jpg" id="screenthumb" title="High in the sky">
							<img src="assets/img/nes_screen_supermariobros3_5.jpg"/>
						</a>
					</div>
					<div class="col-xs-6 col-md-2">
						<a class="thumbnail" href="assets/img/nes_screen_supermariobros3_6.jpg" id="screenthumb" title="Frog Suit">
							<img src="assets/img/nes_screen_supermariobros3_6.jpg"/>
						</a>
					</div>
					<div class="col-xs-6 col-md-2">
						<a class="thumbnail" href="assets/img/nes_screen_supermariobros3_7.jpg" id="screenthumb" title="World 8">
							<img src="assets/img/nes_screen_supermariobros3_7.jpg"/>
						</a>
					</div>-->
					<div class="media">
						<a class="pull-left" href="assets/img/nes_screen_supermariobros3_1.jpg">
							<img class="media-object" src="assets/img/nes_screen_supermariobros3_1.jpg" alt="Mario on an airship" title="Mario on an airship">
						</a>
						<div class="media-body">
							<h4 class="media-heading">On an Airship</h4>
								<span>Bullets everywhere!</span>
						</div>
					</div>
					<div class="media">
						<a class="pull-left" href="assets/img/nes_screen_supermariobros3_2.jpg">
							<img class="media-object" src="assets/img/nes_screen_supermariobros3_3.jpg" alt="Mario in the Desert" title="Mario in the Desert">
						</a>
						<div class="media-body">
							<h4 class="media-heading">In a Desert level</h4>
								<span>There are many different environments!</span>
						</div>
					</div>
					<div class="media">
						<a class="pull-left" href="assets/img/nes_screen_supermariobros3_3.jpg">
							<img class="media-object" src="assets/img/nes_screen_supermariobros3_6.jpg" alt="Mario underwater" title="Mario underwater">
						</a>
						<div class="media-body">
							<h4 class="media-heading">Mario Underwater</h4>
								<span>Mario using the frog suit powerup for better underwater control.</span>
						</div>
					</div>
					<div class="media">
						<a class="pull-left" href="assets/img/nes_screen_supermariobros3_4.jpg">
							<img class="media-object" src="assets/img/nes_screen_supermariobros3_7.jpg" alt="Mario on World 8 map" title="Mario on World 8 map">
						</a>
						<div class="media-body">
							<h4 class="media-heading">World-8 map</h4>
								<span>Mario on the final world map.</span>
						</div>
					</div>
				</div>
				<br><br>
				<div class="page-header">
					<h4>Sound</h4>
				</div>
				
				
				<!--start of player-->
				<div id="jquery_jplayer_1" class="jp-jplayer"></div>
				<div id="jp_container_1" class="jp-audio">
					<div class="jp-type-single">
						<div class="jp-gui jp-interface">
							<ul class="jp-controls">
								<li><a href="javascript:;" class="jp-play" tabindex="1">play</a></li>
								<li><a href="javascript:;" class="jp-pause" tabindex="1">pause</a></li>
								<li><a href="javascript:;" class="jp-stop" tabindex="1">stop</a></li>
								<li><a href="javascript:;" class="jp-mute" tabindex="1" title="mute">mute</a></li>
								<li><a href="javascript:;" class="jp-unmute" tabindex="1" title="unmute">unmute</a></li>
								<li><a href="javascript:;" class="jp-volume-max" tabindex="1" title="max volume">max volume</a></li>
							</ul>
							<div class="jp-progress">
								<div class="jp-seek-bar">
									<div class="jp-play-bar"></div>
								</div>
							</div>
							<div class="jp-volume-bar">
								<div class="jp-volume-bar-value"></div>
							</div>
							<div class="jp-time-holder">
							<div class="jp-current-time"></div>
							<div class="jp-duration"></div>
								<ul class="jp-toggles">
									<li><a href="javascript:;" class="jp-repeat" tabindex="1" title="repeat">repeat</a></li>
									<li><a href="javascript:;" class="jp-repeat-off" tabindex="1" title="repeat off">repeat off</a></li>
								</ul>
							</div>
						</div>
							<div class="jp-title">
								<ul>
									<li>Super Mario Bros. 3 - Overworld</li>
								</ul>
							</div>
							<div class="jp-no-solution">
								<span>Update Required</span>
									To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
							</div>
					</div>
				</div>
				<!--end of player-->
			</div>
		</div>
	<div>
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
	
	<script src="magpopup/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="jplayer/jquery.jplayer.js"></script>
	
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
		$('#mediacart').magnificPopup({
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
			titleSrc: 'title',
		});
		
		
		$('#affixleft').affix({
			offset: {
				top: 0,
		 		bottom: function () {
					return (this.bottom = $('.bs-footer').outerHeight(true))
				}
			}
		})
		
		$(document).ready(function(){
			$("#jquery_jplayer_1").jPlayer({
				ready: function () {
				$(this).jPlayer("setMedia", {
					mp3: "sound/nes_supermariobros3_1.mp3",
				});
			},
			swfPath: "jplayer",
			supplied: "mp3"
			});
		});

	</script>
	
	</body>
</html>