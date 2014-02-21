{{HTML::style('css/nes_ratings.css')}}

<div class="page-header">
	<h4>Ratings</h4>
</div>
<div id="ratingsection">
	<div id="ratingtable">
		<table class="table">
			<tr class="tableheader active">
				<td colspan="2">Review Ratings</td>
			</tr>
			@foreach ($ratings as $rating)
				<tr>
					<td>{{$rating->name}}</td>
					<td class={{$rating->class}}>{{$rating->rating}}</td>
				</tr>
			@endforeach
		</table>
	</div>
	<div id="safetytable">
		<table class="table">
			<tr class="tableheader active">
				<td colspan="6">Content Ratings</td>
			</tr>
			@if (! (isset($game->esrb) || isset($game->pegi) || isset($game->cero)  || isset($game->acb)   ) )
				<tr>
					<td>None</td>
					<td><img class="ratings" src={{asset('img/ratings/none.png')}} /></td>
				</tr>
			@endif
			<tr>
				@if (isset($game->esrb))
					<td>ESRB</td>
					<td><img class="ratings" src={{asset('img/ratings/'.$game->esrb)}} /></td>
				@endif
				@if (isset($game->pegi))
					<td>PEGI</td>
					<td><img class="ratings" src={{asset('img/ratings/'.$game->pegi)}} /></td>
				@endif
			</tr>
			<tr>
				@if (isset($game->cero))
					<td>CERO</td>
					<td><img class="ratings" src={{asset('img/ratings/'.$game->cero)}} /></td>
				@endif
				@if (isset($game->acb))
					<td>ACB</td>
					<td><img class="ratings" src={{asset('img/ratings/'.$game->acb)}} /></td>
				@endif
			</tr>
		</table>
	</div>
</div>