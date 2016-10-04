var tree, Treeanimation, Busqueda, node=null

function inicio(){
	document.getElementById("banimar").disabled =false ;
	tree = new Tree()
	tree.generateTree()

	//alert("tree: "+tree.raiz.print())
	
	//alert("raiz: "+tree.raiz.print())
	//alert(tree.raiz.print())
	Busqueda=new BusquedaCiega(tree.raiz)
	Busqueda.recorridoProfundidad(tree.raiz, [], [])

	//alert("nodo solucion: "+Busqueda.nodesol)

	Treeanimation=new TreeAnimation(tree.raiz)
	Treeanimation.addAll()

	

}

function animar(){
	Treeanimation.animation(Busqueda.arcos_recorridos, Busqueda.nodesol)
}