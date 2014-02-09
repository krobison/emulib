@extends('layouts.master')

@section('title')
EmuLib: NES Library
@endsection

@section('content')
	@foreach ($games as $game)
		<h4>{{link_to('nes/'.$game->id,$game->name)}}</h4>
	@endforeach
@endsection
