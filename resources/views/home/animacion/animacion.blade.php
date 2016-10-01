@extends('templates.template')

@section('title', 'animacion')

@section('body')

	<script src="js/jquery.min.js"></script>
	<script src="js/arbor-tween.js"></script>
	<script src="js/arbor.js"></script>
	<script src="js/graphics.js"></script>
	<script src="js/renderer.js"></script>
	<script src="js/tree_generate.js"></script>
	<script src="js/tree_animation.js"></script>
	<script src="js/amplitude_blind_search.js"></script>
	

	<div class="container-animatebutton">
		<button  class="btn btn-success" href='/animacion'  onclick='document.location.href= "/animacion"'>
			<span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> 
			Gerenar nuevo arbol
		</button>
		<button id="banimar" class="btn btn-success" disabled='true' onclick="animar()">
			<span class="glyphicon glyphicon-circle-arrow-right" aria-hidden="true"></span> 
			Siguiente Animacion
		</button>
	</div>

	<div class="container-tree">
		<canvas id="viewport" width="800" height="600"></canvas>
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