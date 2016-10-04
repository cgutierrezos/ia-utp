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