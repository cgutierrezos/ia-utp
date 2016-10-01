@extends('templates.template')

@section('title', 'animacion')

@section('body')

	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/arbor-tween.js') }}"></script>
	<script src="{{ asset('js/arbor.js') }}"></script>
	<script src="{{ asset('js/graphics.js') }}"></script>
	<script src="{{ asset('js/renderer.js') }}"></script>
	<script src="{{ asset('js/tree_generate.js') }}"></script>
	<script src="{{ asset('js/tree_animation.js') }}"></script>
	<script src="{{ asset('js/amplitude_blind_search.js') }}"></script>

	<div class="container-fluid">
		<button  class="btn btn-success" href='/animacion'  onclick='document.location.href= "/animacion"'>
			<span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> 
			Gerenar nuevo arbol
		</button>
		<button id="banimar" class="btn btn-success" disabled='true' onclick="animar()">
			<span class="glyphicon glyphicon-circle-arrow-right" aria-hidden="true"></span> 
			Siguiente Animacion
		</button>
	</div>

	<div class="container-fluid">
		<canvas id="viewport" width="device-width" height="600"></canvas>
	</div>


	<script language="javascript" type="text/javascript">
			var sys = arbor.ParticleSystem(1000, 600,0.5)
			sys.parameters({gravity:true})
			sys.renderer = Renderer("#viewport") 
			var tree, Treeanimation, Busqueda, node=null
			inicio()
		

		function inicio(){
			document.getElementById("banimar").disabled =false ;
			tree = new Tree()
			tree.createTree()
			Treeanimation=new TreeAnimation(tree.nodes, tree.arcs, tree.depth, tree.breadth, tree.brothers, 1000, 600)
			Treeanimation.addNodes()
			Treeanimation.addEdges()
			Busqueda=new BusquedaCiegaAmplitud(tree.nodes, tree.arcs, tree.values)
			node=Busqueda.recorridoAnchura()
		}

		function animar(){
			Treeanimation.animation(Treeanimation.Aedges, Busqueda.arcos_recorridos, node)
		}

	</script>

@endsection

