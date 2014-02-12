{{HTML::style('css/nes_genies.css')}}
{{HTML::style('packages/jplayer/skins/blue.monday/jplayer.blue.monday.css')}}


@if ($genies->count() > 0)
	<div class="page-header code-header">
		<h4>Game Genie Codes</h4>
	</div>
	
	<div id="codetableholder">
		<table class="table">
			<tr class="tableheader success" id="show">
				<td colspan="6">GameGenie (click to expand)</td>
			</tr>
		</table>
		<table class="table" id="codetable">
			@foreach ($genies as $genie)
				<tr class="showhide">
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

<script>
	$("#show").click(function(){
		$("#codetable").toggle(300);
	});
	$(document).ready(function() {$("#codetable").toggle();});
</script>