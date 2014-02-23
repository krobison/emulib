	
@if ($inverted == 'true')
	<nav class="navbar navbar-inverse" role="navigation">
@else
	<nav class="navbar navbar-default" role="navigation">
@endif
		
	  <div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		  <a class="navbar-brand" href={{url("")}} style="margin-left:16px;">EmuLib</a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li><a href={{url("")}}><span class="glyphicon glyphicon-home"></span>&nbsp;&nbsp;Home</a></li>
				<li><a href="#"><span class="glyphicon glyphicon-comment"></span>&nbsp;&nbsp;News</a></li>
				<li><a href={{url("browse")}}><span class="glyphicon glyphicon-list-alt"></span>&nbsp;&nbsp;Browse</a></li>
				<li><a href="#"><span class="glyphicon glyphicon-question-sign"></span>&nbsp;&nbsp;About</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li class="active"><a href="#"><span class="glyphicon glyphicon-user"></span> User Name</a></li>
				<form class="navbar-form navbar-left" role="search">
					<div class="form-group input-group-sm">
						<input type="text" class="form-control" placeholder="Search" style="width:256px;margin-top:4px;">
					</div>
					@if ($inverted == 'true')
						<button type="submit" class="btn btn-danger btn-sm" style="margin-top:4px;"> <span class="glyphicon glyphicon-search"></span></button>
					@else
						<button type="submit" class="btn btn-success btn-sm" style="margin-top:4px;"> <span class="glyphicon glyphicon-search"></span></button>
					@endif
				</form>
				<li class="dropdown">
				 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Settings <b class="caret"></b></a>
				   <ul class="dropdown-menu">
					<li><a href="#">Account Settings</a></li>
					@if ($inverted == 'true')
						<li><a href="{{asset('uninvertNavbar')}}">Alternative Navbar <span class="glyphicon glyphicon-ok"></span></a></li>
					@else
						<li><a href="{{asset('invertNavbar')}}">Alternative Navbar</a></li>
					@endif
					
				  </ul>
				</li>
				<li class="dropdown">
				 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Theme <b class="caret"></b></a>
				  <ul class="dropdown-menu">
					@foreach ($themes as $atheme)
						<li><a href="{{asset('theme'.$atheme.'')}}">{{ucfirst($atheme)}}
							@if ($theme == $atheme)
								<span class="glyphicon glyphicon-ok"></span>
							@endif
						</a></li>
					@endforeach
				  </ul>
				</li>
				<li><a href="#"> Logout</a></li>
			</ul>
		</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>