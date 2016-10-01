function TreeAnimation (nodes, arcs, w_widht, w_heigth){
  	this.nodes=nodes
	this.arcs=arcs
	this.w_widht=w_widht
	this.w_heigth=w_heigth
	this.node_cont=0
	this.node_cont_end=this.nodes.length
	this.arc_cont=0
	this.Aedges=new Array()
	this.Anodes=new Array()


	this.addNode = function(name, shape, color, label){
		var node=sys.addNode(name,{'alone':false, 'mass':2, 'color':color ,'shape': shape, 'label':label});
		this.Anodes.push(node)
	}

	this.addNodes =function(){
		this.addNode(this.nodes[0], 'dot', 'black', 'RAIZ')
		for(i=1;i<nodes.length;i++){
			this.addNode(this.nodes[i], '', 'blue', this.nodes[i])
		}
	}


	this.addEdge = function(arc){
		var e=sys.addEdge(arc[0], arc[1], {length:5, directed:true, pointSize:10, color:"blue"})
		this.Aedges.push(e)
	}

	this.addEdges = function(){
		for(i=0;i<this.arcs.length;i++){
			this.addEdge(this.arcs[i])
		}
	}


	this.NodeSeleccion= function(node, c){
		sys.tweenNode(node, 4, {color:c, radius:4})
	}

	this.NodeDesseleccion = function(node, c){
		sys.tweenNode(node, 2, {color:c, radius:4})
	}

	this.EdgeSeleccion= function(edge, c){
		sys.tweenEdge(edge, 0,  { color: c })
	}

	this.EdgeDesseleccion = function(edge, c){
		sys.tweenEdge(edge, edge[1], 1, {color: c})
	}

	this.p = function(text){
		document.writeln(text)
	}

	this.sleep = function(milliseconds) {
		var start = new Date().getTime();
			for (var i = 0; i < 1e7; i++) {
			if ((new Date().getTime() - start) > milliseconds){
				break;
			}
		}
	}


	this.animation = function (edges, arcs, nodeF){
		if(this.arc_cont<arcs.length){
			this.NodeSeleccion(arcs[this.arc_cont][0], "red")
			

			var node=arcs[this.arc_cont][1]
			if(nodeF == node){
				this.NodeSeleccion(nodeF, "green")
				this.EdgeSeleccion(edges[this.arc_cont], "green")
			}
			else{
				this.NodeSeleccion(arcs[this.arc_cont][1], "red")
				this.EdgeSeleccion(edges[this.arc_cont], "red")
			}
			
			
			//this.EdgeSeleccion(arcs[this.arc_cont])
			
			this.arc_cont+=1

		}
		
	}

	

}
