@extends('layouts.master')

@section('title')
EmuLib: Welcome!
@endsection

{{HTML::style('css/welcome.css')}}

@section('content')
	<div class="welcomer">
		<img alt="Emulib" src="{{asset('img/logo_full.png')}}"/>
	</div>
	<div class="footer">&copy;2014 Kolten Robison</div>
@endsection
