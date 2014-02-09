{{HTML::style('css/nes_info.css')}}

<div>
<div id="info">
	<div id="pictureholder">
			<a class="thumbnail" href={{asset('img/nes_boxart/'.$game->filename.'.jpg')}} title="Super Mario Bros.3 Box Art">
				<img src={{asset('img/nes_boxart/'.$game->filename.'.jpg')}} />
			</a>
	</div>
	<div id="infotable">
		<table class="table">
			<tr class="tableheader success">
				<td colspan="2">Development</td>
			</tr>
			@if (isset($game->developer))
				<tr>
					<td>Developer</td>
					<td>{{$game->developer}}</td>
				</tr>
			@endif
			@if (isset($game->publisher))
				<tr>
					<td>Publisher</td>
					<td>{{$game->publisher}}</td>
				</tr>
			@endif
			@if (isset($game->producer))
				<tr>
					<td>Producer</td>
					<td>{{$game->producer}}</td>
				</tr>
			@endif
			<tr>
				<td>Series</td>
				<td>Super Mario</td>
			</tr>
			<tr class="tableheader warning">
				<td colspan="2">Release</td>
			<tr>
			<tr>
				<td>Japan&nbsp;&nbsp;<img class="flag" src={{asset('img/flags/japan.png')}} /></td>
				<td>October 23, 1988</td>
			</tr>
			<tr>
				<td>North America&nbsp;&nbsp;<img class="flag" src={{asset('img/flags/usa.png')}} /></td>
				<td>February 12, 1990</td>
			</tr>
			<tr>
				<td>PAL&nbsp;&nbsp;<img class="flag" src={{asset('img/flags/eu.png')}} /></td>
				<td>August 29, 1991</td>
			</tr>
			<tr class="tableheader danger">
				<td colspan="2">Gameplay</td>
			<tr>
			<tr>
				<td>Genre</td>
				<td>Platformer</td>
			</tr>
			<tr>
				<td>Players</td>
				<td>1-2</td>
			</tr>
			<tr class="tableheader active">
				<td colspan="2">Game Media</td>
			<tr>
			<tr>
				<td>Cartridge</td>
				<td id="mediacart">
					<a id="media" class="thumbnail" href="assets/img/nes_cart_supermariobros3.jpg" title="Super Mario Bros.3 Cartridge">
						<img src="assets/img/nes_cart_supermariobros3.jpg"/>
					</a>
				</td>
			</tr>
			<tr>
				<td>Manual</td>
				<td>
					<a id="media" class="thumbnail" href="assets/img/nes_manual_supermariobros3.pdf" title="Super Mario Bros.3 Cartridge">
						<img src="assets/img/nes_manthumb_supermariobros3.jpg"/>
					</a>
				</td>
			</tr>
		</table>
	</div>
</div>
</div>

{{HTML::script('packages/magpopup/jquery.magnific-popup.min.js');}}
	
	<script>
		$('#pictureholder').magnificPopup({
			delegate: 'a', // child items selector, by clicking on it popup will open
			type: 'image',
			 zoom: {
				enabled: true, // By default it's false, so don't forget to enable it

				duration: 300, // duration of the effect, in milliseconds
				easing: 'ease-in-out', // CSS transition easing function 

				// The "opener" function should return the element from which popup will be zoomed in
				// and to which popup will be scaled down
				// By defailt it looks for an image tag:
				opener: function(openerElement) {
					// openerElement is the element on which popup was initialized, in this case its <a> tag
					// you don't need to add "opener" option if this code matches your needs, it's defailt one.
					return openerElement.is('img') ? openerElement : openerElement.find('img');
				}			
			},
			titleSrc: 'title',
		});
		$('#mediacart').magnificPopup({
			delegate: 'a', // child items selector, by clicking on it popup will open
			type: 'image',
			 zoom: {
				enabled: true, // By default it's false, so don't forget to enable it

				duration: 300, // duration of the effect, in milliseconds
				easing: 'ease-in-out', // CSS transition easing function 

				// The "opener" function should return the element from which popup will be zoomed in
				// and to which popup will be scaled down
				// By defailt it looks for an image tag:
				opener: function(openerElement) {
					// openerElement is the element on which popup was initialized, in this case its <a> tag
					// you don't need to add "opener" option if this code matches your needs, it's defailt one.
					return openerElement.is('img') ? openerElement : openerElement.find('img');
				}			
			},
			titleSrc: 'title',
		});
	</script>