{{HTML::style('css/nes_genies.css')}}
{{HTML::style('packages/jplayer/skins/blue.monday/jplayer.blue.monday.css')}}


@if ($genies->count() > 0)
	<div class="page-header code-header">
		<h4>Game Genie Codes</h4>
	</div>
	
	<div id="codetableholder">
		<table class="table">
			<tr class="tableheader success" id="show">
				<td colspan="6"><span id="genietext">GameGenie (click to expand)</span></td>
			</tr>
		</table>
		<div id="codetablescrollholder">
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
	</div>
	
@endif

<script>
	$("#show").click(function(){
		$("#codetable").slideToggle(200);
		
		var genietext = $( "#genietext" ).text();
		
		if (genietext == "GameGenie (click to expand)"){
			$('html, body').animate({
				scrollTop: $("#codetable").offset().top-100
			}, 200);
			
			$("#genietext").text("GameGenie (click to hide)");
			
			$("#codetablescrollholder").css({
				height: '600px',
				'overflow-y': 'auto',
				'margin-bottom' : '64px'
			});
		}else{
			$("#genietext").text("GameGenie (click to expand)");
			
			$("#codetablescrollholder").css({
				height: 'auto',
				'overflow-y': 'auto',
				'margin-bottom' : '0px'
			});
		}
		
	});
	$(document).ready(function() {
		$("#codetable").hide();
	});
</script>