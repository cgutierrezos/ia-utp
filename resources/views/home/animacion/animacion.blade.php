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
	<script src="{{ asset('js/tree_animation.js') }}"></script>
	
	
	

	<div class="container-fluid">
		<button  class="btn btn-warning btn-lg btn-block"  onclick='javascript:location.reload()'>
			<span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> 
			Gerenar nuevo arbol
		</button>
		<button id="banimar" class="btn btn-success btn-lg btn-block"  onclick='inicio_animacion()'>
			<span class="glyphicon glyphicon-circle-arrow-right" aria-hidden="true"></span> 
			Detener o Iniciar Animacion (Automatico)
		</button>
		<button id="siguiente" class="btn btn-success btn-lg btn-block" disabled='true' onclick='animar()'">
			<span class="glyphicon glyphicon-circle-arrow-right" aria-hidden="true"></span> 
			Siguiente Paso (Manual)
		</button>
	</div>

	<div class="container-fluid">
		<canvas id="viewport" width="screen.width" height="600"></canvas>
	</div>

	<script type="text/javascript">
		var iniciar_animacion=true
		var animacion=null
		var tree, Treeanimation, Busqueda, node=null

		document.getElementById("body").onresize =resize_canvas() 
		function inicio_animacion(){
			if(iniciar_animacion){
				animacion=window.setInterval(animar, 1000)
				iniciar_animacion=false
				document.getElementById("siguiente").disabled =true ;
			}
			else{
				clearInterval(animacion)
				iniciar_animacion=true
				document.getElementById("siguiente").disabled =false ;
			}
		}
		

		function resize_canvas(){
            var canvas = document.getElementById("viewport");
            if (canvas.width  < window.innerWidth){
                canvas.width  = window.innerWidth-80
            }

            if (canvas.height < window.innerHeight){
                canvas.height = window.innerHeight-160
            }
        }

		
		

		function inicio(){
			var tipo_busqueda=<?php echo $search ?>;
			tree = new Tree()
			tree.generateTree()

			//alert("tree: "+tree.raiz.print())
			
			//alert("raiz: "+tree.raiz.print())
			//alert(tree.raiz.print())
			Busqueda=new BusquedaCiega(tree.raiz)
			if(tipo_busqueda==0)
				Busqueda.recorridoAnchura()
			else
				Busqueda.recorridoProfundidad(tree.raiz, [], [])
			//alert("nodo solucion: "+Busqueda.nodesol)

			Treeanimation=new TreeAnimation(tree.raiz)
			Treeanimation.addAll()
			
		}

		function animar(){
			Treeanimation.animation(Busqueda.arcos_recorridos, Busqueda.nodesol)
		}


		var sys = arbor.ParticleSystem(1000, 600,0.5)
		sys.parameters({gravity:true})
		sys.renderer = Renderer("#viewport") 
		inicio()
		

	</script>




	

@endsection

