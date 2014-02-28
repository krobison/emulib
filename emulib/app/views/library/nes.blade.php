@extends('layouts.master')

@section('title')
EmuLib: NES Library
@endsection

{{HTML::style('css/browsenes.css')}}

@section('content')

	@include('layouts.breadcrumb')
	
	<div class="panel panel-default" id="browse_reader_side" data-spy="affix" data-offset-top="0">
		<h4>Display </h4>
		<hr>
		<div class="btn-toolbar" role="toolbar">
			<form action={{url("nes_library_list")}} class="viewbuttonform">
				<span class="glyphicon glyphicon-list-alt"> List:</span>
				@if ($view == 'list')
					<button type="submit" class="btn btn-xs btn-success active">List</button>
				@else
					<button type="submit" class="btn btn-xs btn-info">List</button>
				@endif
			</form>
			<br>
			<form action={{url("nes_library_boxart")}} class="viewbuttonform">
				<span class="glyphicon glyphicon-th"> Boxart:</span>
				@if ($view == 'boxart')
					<button type="submit" class="btn btn-xs btn-success active">Full</button>
				@else
					<button type="submit" class="btn btn-xs btn-info">Full</button>
				@endif
			</form>
			<form action={{url("nes_library_boxfront")}} class="viewbuttonform">
				@if ($view == 'boxfront')
					<button type="submit" class="btn btn-xs btn-success active">Front</button>
				@else
					<button type="submit" class="btn btn-xs btn-info">Front</button>
				@endif
			</form>
			<form action={{url("nes_library_boxside")}} class="viewbuttonform">
				@if ($view == 'boxside')
					<button type="submit" class="btn btn-xs btn-success active">Side</button>
				@else
					<button type="submit" class="btn btn-xs btn-info">Side</button>
				@endif
			</form>
			<form action={{url("nes_library_boxback")}} class="viewbuttonform">
				@if ($view == 'boxback')
					<button type="submit" class="btn btn-xs btn-success active">Back</button>
				@else
					<button type="submit" class="btn btn-xs btn-info">Back</button>
				@endif
			</form>
			<br>
			<form action={{url("nes_library_cartridge")}} class="viewbuttonform">
				<span class="glyphicon glyphicon-stop"> Cartridge:</span>
				@if ($view == 'cartridge')
					<button type="submit" class="btn btn-xs btn-success active">Front</button>
				@else
					<button type="submit" class="btn btn-xs btn-info">Front</button>
				@endif
			</form>
		</div>
	</div>
	
	<div class="panel panel-default" id="browse_reader_side_filter" data-spy="affix" data-offset-top="0">
		<h4 id="searchexp">Filter</h4>
		<hr>
		<div id="searchable">
			<form method="POST" action={{url("nes_filter_library_{$view}")}}>
				<span class="searchlabel">Genre</span>
				<div class="panel panel-info genrebox">
						<div class="input-group">
							<span class="input-group-addon">
								@if (in_array("All",$search_genre))
									<input type="checkbox" class="genreselectall" checked>
								@else
									<input type="checkbox" class="genreselectall">
								@endif
							</span>
							<input type="text" value='All' class="form-control" disabled>
						</div>
					@foreach ($genres as $genre)
						<div class="input-group">
							<span class="input-group-addon">
								@if (!in_array("All",$search_genre) && in_array($genre->name,$search_genre) )
									<input type="checkbox" name="genre_{{$genre->name}}" class="genreselect" checked>
								@else
									<input type="checkbox" name="genre_{{$genre->name}}" class="genreselect">
								@endif
							</span>
								<input type="text" value='{{$genre->name}}' class="form-control" disabled>
						</div>
					@endforeach
				</div>
			<button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-search"> Filter</span></button>
			</form>
		</div>
	</div>
	
	<div class="panel panel-default" id="browse_reader">
		<div class="holdy">
		@if ($view == 'list')
			<table class="table table-striped">
			@foreach ($games as $game)
				<tr>
					<td class="minirow"><img class="header_thumb" src={{asset('img/nes_sprite/default.png')}} /></td>
					<td>{{link_to('nes/'.$game->id,$game->name)}}</td>
				</tr>
			@endforeach
			</table>
		@elseif ($view == 'boxart')
			@foreach ($games as $game)
				<div class="col-xs-6 col-md-2">
					<a class="thumbnail" href={{url('nes/'.$game->id)}}>
						@if ($game->boxart)
							<img src={{asset('img/nes_boxart/thumb/'.$game->filename.'.png')}} />
						@else
							<img src={{asset('img/nes_boxart/thumb/default.png')}} />
						@endif
							<div class="caption">{{$game->name}}</div>
					</a>
				</div>
			@endforeach
		@elseif ($view == 'boxfront')
			@foreach ($games as $game)
				<div class="col-xs-6 col-md-2">
					<a class="thumbnail" href={{url('nes/'.$game->id)}}>
						@if ($game->boxart)
							<img src={{asset('img/nes_boxart/front/'.$game->filename.'.png')}} />
						@else
							<img src={{asset('img/nes_boxart/front/default.png')}} />
						@endif
							<div class="caption">{{$game->name}}</div>
					</a>
				</div>
			@endforeach
		@elseif ($view == 'boxback')
			@foreach ($games as $game)
				<div class="col-xs-6 col-md-2">
					<a class="thumbnail" href={{url('nes/'.$game->id)}}>
						@if ($game->boxart)
							<img src={{asset('img/nes_boxart/back/'.$game->filename.'.png')}} />
						@else
							<img src={{asset('img/nes_boxart/back/default.png')}} />
						@endif
							<div class="caption">{{$game->name}}</div>
					</a>
				</div>
			@endforeach
		@elseif ($view == 'boxside')
			@foreach ($games as $game)
				<div class="col-xs-6 col-md-1">
					<a class="thumbnail" href={{url('nes/'.$game->id)}}>
						@if ($game->boxart)
							<img src={{asset('img/nes_boxart/side/'.$game->filename.'.jpg')}} />
						@else
							<img src={{asset('img/nes_boxart/side/default.jpg')}} />
						@endif
					</a>
				</div>
			@endforeach
		@elseif ($view == 'cartridge')
			@foreach ($games as $game)
				<div class="col-xs-6 col-md-2">
					<a class="thumbnail thumbnailc" href={{url('nes/'.$game->id)}}>
						@if ($game->cartridge)
							<img src={{asset('img/nes_cartridge/thumb/'.$game->filename.'.png')}} />
						@else
							<img src={{asset('img/nes_cartridge/thumb/default.jpg')}} />
						@endif
							<div class="caption">{{$game->name}}</div>
					</a>
				</div>
			@endforeach
		@endif
		</div>
	</div>
	
	<script>
		//disable scrolling page if scrolling in genrebox
		$( '.genrebox' ).bind( 'mousewheel DOMMouseScroll', function ( e ) {
			var e0 = e.originalEvent,
				delta = e0.wheelDelta || -e0.detail;
			
			this.scrollTop += ( delta < 0 ? 1 : -1 ) * 120;
			e.preventDefault();
		});
	
	</script>
	
@endsection
