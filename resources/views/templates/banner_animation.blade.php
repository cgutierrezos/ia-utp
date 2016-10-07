@extends('templates.banner')


@section('content')
	
	<div class="row">
		<ul class="actions">
			<li>
				<a class="button special big" onclick='javascript:location.reload()'>
					<span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> Gerenar nuevo arbol
				</a>
			</li>
			<li>
				<a id="banimar" class="button special big" onclick='inicio_animacion()'>
					<span id="play_animar" class="glyphicon glyphicon-play" aria-hidden="true"></span> Animar (Automatico)
				</a>
			</li>
			<li>
				<a id="siguiente" class="button special big" onclick='animar()'>
					<span class="glyphicon glyphicon-step-forward" aria-hidden="true"></span> Animar (Manual)
				</a>
			</li>
		</ul>

		


	</div>
	

@endsection


