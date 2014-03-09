{{HTML::style('css/breadcrumb.css')}}

	<ol class="breadcrumb">
		<li><a href={{url("browse")}}>Browse</a></li>
	@if (Request::path() == "nes_library")
		<li class="active">NES</li>
	@endif
	@if(isset($game))
		@if (isset($lib_nes))
			<li class="active"><a href={{url("nes_library")}}>NES</a></li>
			<li class="active">{{$game->name}}</li>
		@endif
	@endif
	</ol>