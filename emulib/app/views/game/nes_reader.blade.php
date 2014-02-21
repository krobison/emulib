{{HTML::style('css/nes_reader.css')}}

<div id="reader">
	<div id="buttonholder">
		<button type="button" class="btn btn-success btn-sm" id="b_configure"><span class="glyphicon glyphicon-book"></span>&nbsp;&nbsp;Add To Library</button>
		<button type="button" class="btn btn-info btn-sm" disabled="disabled" id="b_configure"><span class="glyphicon glyphicon-cog"></span>&nbsp;&nbsp;Configure</button>
		<button type="button" class="btn btn-danger btn-sm" disabled="disabled" id="b_configure"><span class="glyphicon glyphicon-play"></span>&nbsp;&nbsp;Launch</button>
	</div>
	<div class="page-header">
		<h3>NES Games 
			<small>{{$game->name}}</small>
			@if (file_exists(base_path().'/public/img/nes_sprite/'.$game->filename.'.png'))
				<img class="header_thumb" src={{asset('img/nes_sprite/'.$game->filename.'.png')}} />
			@else
				<img class="header_thumb" src={{asset('img/nes_sprite/default.png')}} />
			@endif
		</h3>
	</div>
		<p class="bodytext">
			{{$game->description}}
		</p>
	@include('game.nes_ratings')
	@include('game.nes_screenshots')
	@include('game.nes_genies')
</div>