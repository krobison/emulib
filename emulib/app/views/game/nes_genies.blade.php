{{HTML::style('css/nes_genies.css')}}
{{HTML::style('packages/jplayer/skins/blue.monday/jplayer.blue.monday.css')}}


@if ($genies->count() > 0)
	<div class="page-header code-header">
		<h4>Game Genie Codes</h4>
	</div>
	
	<div id="codetableholder">
		<table class="table" id="codetable">
			<tr class="tableheader success">
				<td colspan="6">GameGenie</td>
			</tr>
			@foreach ($genies as $genie)
				<tr>
					@if ($genie->twoColumn)
						<td colspan="2" class="active" id="doublerow"> {{$genie->description}} </td>
					@else
						<td style="width:50%">{{$genie->code}} </td>
						<td style="width:50%">{{$genie->description}} </td>
					@endif
				</tr>
			@endforeach
		</table>
	</div>
	
@endif