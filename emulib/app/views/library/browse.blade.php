@extends('layouts.master')

@section('title')
EmuLib: Browse
@endsection

{{HTML::style('css/browse.css')}}

@section('content')
	
	@include('layouts.breadcrumb')

	<div class="panel panel-default" id="browse_reader">
		<div class="row">
		  <div class="col-sm-6 col-md-3">
			<div class="thumbnail">
			  <img src={{asset('img/library/nes.png')}} alt="Nes games">
			  <div class="caption">
				<p><a href={{url("nes_library")}} class="btn btn-primary" id="consolbutton" role="button">Nintendo Entertainment System</a></p>
			  </div>
			</div>
		  </div>
		</div>
	</div>
@endsection
