{{HTML::style('css/nes_screenshots.css')}}
{{HTML::style('packages/jplayer/skins/blue.monday/jplayer.blue.monday.css')}}

<div class="page-header">
	<h4>Screenshots</h4>
</div>
<div id="screens">
	<?php $counter = 1; ?>
	@foreach ($screenshots as $screenshot)
		<div class="media">
			<a class="pull-left" href={{asset('img/nes_screenshot/'.$game->filename.'_'.$counter.'.jpg')}}>
				<img class="media-object" src={{asset('img/nes_screenshot/'.$game->filename.'_'.$counter.'.jpg')}}>
			</a>
			<div class="media-body">
				<h4 class="media-heading">{{$screenshot->name}}</h4>
					<span>{{$screenshot->description}}</span>
			</div>
		</div>
		<?php $counter += 1; ?>
	@endforeach
	
</div>

<div class="page-header" style="margin-top:32px;">
		<h4>Sound</h4>
	</div>
	
	
	<!--start of player-->
	<div id="jquery_jplayer_1" class="jp-jplayer"></div>
	<div id="jp_container_1" class="jp-audio">
		<div class="jp-type-single">
			<div class="jp-gui jp-interface">
				<ul class="jp-controls">
					<li><a href="javascript:;" class="jp-play" tabindex="1">play</a></li>
					<li><a href="javascript:;" class="jp-pause" tabindex="1">pause</a></li>
					<li><a href="javascript:;" class="jp-stop" tabindex="1">stop</a></li>
					<li><a href="javascript:;" class="jp-mute" tabindex="1" title="mute">mute</a></li>
					<li><a href="javascript:;" class="jp-unmute" tabindex="1" title="unmute">unmute</a></li>
					<li><a href="javascript:;" class="jp-volume-max" tabindex="1" title="max volume">max volume</a></li>
				</ul>
				<div class="jp-progress">
					<div class="jp-seek-bar">
						<div class="jp-play-bar"></div>
					</div>
				</div>
				<div class="jp-volume-bar">
					<div class="jp-volume-bar-value"></div>
				</div>
				<div class="jp-time-holder">
				<div class="jp-current-time"></div>
				<div class="jp-duration"></div>
					<ul class="jp-toggles">
						<li><a href="javascript:;" class="jp-repeat" tabindex="1" title="repeat">repeat</a></li>
						<li><a href="javascript:;" class="jp-repeat-off" tabindex="1" title="repeat off">repeat off</a></li>
					</ul>
				</div>
			</div>
				<div class="jp-title">
					<ul>
						<li>{{$game->name}} - {{$game->sound_description}}</li>
					</ul>
				</div>
				<div class="jp-no-solution">
					<span>Update Required</span>
						To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
				</div>
		</div>
	</div>
	<!--end of player-->

{{HTML::script('packages/magpopup/jquery.magnific-popup.min.js');}}

@if ($game->sound)
	{{HTML::script('packages/jplayer/jquery.jplayer.js');}}
	<div id="sounddiv" location="{{asset('sound/nes/'.$game->filename.'.mp3')}}"></div>
	<script>
		$(document).ready(function(){
			$("#jquery_jplayer_1").jPlayer({
				ready: function () {
				$(this).jPlayer("setMedia", {
					mp3: $('#sounddiv').attr('location'),
				});
			},
			swfPath: "jplayer",
			supplied: "mp3"
			});
		});
	</script>
@endif
	
<script>
	$('#screens').magnificPopup({
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
			gallery:{enabled:true},
			titleSrc: 'title',
		});
</script>