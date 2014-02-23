{{HTML::style('css/breadcrumb.css')}}

	<ol class="breadcrumb">
		<li><a href={{url("browse")}}>Browse</a></li>
	@if(isset($lib_nes))
		<li><a href={{url("nes_library")}}>NES</a></li>
	@endif
	@if(isset($game))
		<li class="active">{{$game->name}}</li>
	@endif
	</ol>