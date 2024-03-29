@extends('layouts.master')

@section('title')
EmuLib: {{$game->name}}
@endsection

{{HTML::style('css/nes.css')}}
{{HTML::style('packages/magpopup/magnific-popup.css')}}

@section('content')

	@include('layouts.breadcrumb')

    <div class="panel panel-default" id="gamepanel">
		<div class="panel-body">
			@include('game.nes_info')
			@include('game.nes_reader')
		</div>
	</div>

@endsection
