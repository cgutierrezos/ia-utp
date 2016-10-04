@extends('templates.template')

@section('title', 'animacion')

@section('body')

	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/arbor-tween.js') }}"></script>
	<script src="{{ asset('js/arbor.js') }}"></script>
	<script src="{{ asset('js/graphics.js') }}"></script>
	<script src="{{ asset('js/renderer.js') }}"></script>
	<script src="{{ asset('js/node.js') }}"></script>
	<script src="{{ asset('js/anodes.js') }}"></script>
	<script src="{{ asset('js/tree_generate.js') }}"></script>
	<script src="{{ asset('js/blind_search.js') }}"></script>
	@if($search == 0)
		<script src="{{ asset('js/amplitude_search.js') }}"></script>
	@else
		<script src="{{ asset('js/depth_search.js') }}"></script>
	@endif
	<script src="{{ asset('js/tree_animation.js') }}"></script>
	
	
	

	<div class="container-fluid">
		<button  class="btn btn-success btn-lg btn-block"  onclick='javascript:location.reload()'>
			<span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> 
			Gerenar nuevo arbol
		</button>
		<button id="banimar" class="btn btn-success btn-lg btn-block" disabled='true' onclick="animar()">
			<span class="glyphicon glyphicon-circle-arrow-right" aria-hidden="true"></span> 
			Siguiente Animacion
		</button>
	</div>

	<div class="container-fluid">
		<canvas id="viewport" width="screen.width" height="600"></canvas>
	</div>

	<script type="text/javascript">

	document.getElementById("body").onresize =resize_canvas() ;

		function resize_canvas(){
            var canvas = document.getElementById("viewport");
            if (canvas.width  < window.innerWidth){
                canvas.width  = window.innerWidth
            }

            if (canvas.height < window.innerHeight){
                canvas.height = window.innerHeight
            }
        }

		var sys = arbor.ParticleSystem(1000, 600,0.5)
		sys.parameters({gravity:true})
		sys.renderer = Renderer("#viewport") 
		inicio()
	</script>




	

@endsection

