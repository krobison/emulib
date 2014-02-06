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
					<table class="table table-striped">
						<tr class="tableheader">
							<td colspan="2">Development</td>
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
		</div>
		<div id="reader">
			<div class="page-header">
				<h3>NES Games <small>Super Mario Bros. 3</small><img class="header_thumb" src="assets/img/nes_thumb_supermariobros3.png"/></h3>
			</div>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas feugiat vel leo non venenatis. Nullam eu fringilla mi, non ultricies nisl. Nam iaculis, purus ut facilisis consectetur, ipsum ligula fringilla dolor, eget porttitor diam odio quis eros. Etiam pellentesque quis quam id venenatis. Duis ultrices vehicula leo, a convallis magna. Vivamus eu pellentesque elit. Mauris auctor congue pellentesque. Donec lacinia diam sed rhoncus laoreet. In commodo dui a aliquam tristique. Pellentesque elementum orci non laoreet rhoncus. Sed libero diam, ornare eget mi in, rhoncus venenatis augue. Nam vulputate arcu sed felis tempor tempus. Vestibulum libero libero, convallis vitae magna eget, mattis tincidunt dolor. Integer erat nisi, varius vitae nunc eu, vestibulum ullamcorper metus.
				Morbi vel sagittis felis, vel cursus mauris. Fusce molestie tellus ante, mattis congue enim varius sed. Curabitur dictum ultricies magna a aliquet. Etiam condimentum lobortis egestas. Nam urna turpis, ullamcorper sed elit eu, elementum vehicula nibh. Cras feugiat pretium quam eget facilisis. Ut eget eros non quam viverra fermentum at sit amet purus.
				In eget orci interdum, dignissim ipsum at, venenatis leo. Nulla sed odio placerat, ultrices nulla eget, venenatis tortor. Fusce quis tincidunt ante, pellentesque feugiat est. Donec semper erat ac lobortis dictum. Mauris vel eros non sapien ullamcorper dictum eget ut nibh. Proin tempor erat nibh, sit amet vestibulum nisi sagittis id. Donec id risus vitae enim pharetra mollis et non leo. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
				Aenean eu commodo sapien, eget egestas metus. Aliquam accumsan, mauris sit amet placerat hendrerit, justo lacus gravida ipsum, vel sodales orci purus id nisi. Fusce eu ligula ac diam porta semper sed eu nibh. Curabitur diam arcu, congue nec hendrerit venenatis, imperdiet a lacus. Donec ut libero sollicitudin, egestas magna a, hendrerit diam. Cras placerat neque in eros elementum feugiat. Sed elementum sollicitudin magna eget semper. In turpis risus, lobortis sit amet adipiscing quis, suscipit ut enim. Nulla hendrerit nibh nec consectetur lobortis. Duis turpis purus, sagittis sit amet ligula ut, pretium euismod lacus. Donec sit amet sapien mauris. In vitae quam dignissim, viverra dolor id, scelerisque quam.
			</p>
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
	</script>
	
  </body>
</html>