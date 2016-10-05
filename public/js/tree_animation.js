function TreeAnimation (raiz){
  	this.raiz=raiz
  	this.ranode=null
  	this.anodes=[]
  	this.aedges=[]
	this.node_cont=0
	this.arc_cont=0
	this.queue=[]
	this.fin_animacion=false


	this.addNode = function(anode){
		var n=sys.addNode(anode.node.name, {'alone':false, 'mass':2, 'color':anode.color ,'shape': anode.shape, 'label':anode.label});
		this.anodes[anode.node.name]=anode
	}



	this.addEdge = function(anodei, anodef){
		var e=sys.addEdge(anodei.node.name, anodef.node.name, {length:0, directed:true, pointSize:20, color:"blue"})
		anodei.addAnode(anodef)
		anodei.addAedge(anodei.node.name+','+anodef.node.name, e)
		this.aedges[anodei.node.name+','+anodef.node.name]=e
	}


	this.addAll =function(){
		//alert(this.raiz.print())
        this.ranode=new Anode(this.raiz)
        this.ranode.label="RAIZ"
        this.ranode.shape="dot"
        this.ranode.color="black"
        this.queue.push(this.ranode)

		//Hasta que visite todos los nodos

        while (this.queue.length != 0) {

            var anodei = this.queue.shift() //Se saca el primero nodo de la cola

            this.addNode(anodei)
			//Se busca en la matriz que representa el grafo los nodos adyacentes

            for (i = 0; i < anodei.node.nodes.length; i++) {
            	var anodef=new Anode(anodei.node.nodes[i])

				this.queue.push(anodef);

				this.addEdge(anodei, anodef)
            }
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
		sys.tweenEdge(edge, 0, {color: c})
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


	this.animation = function (arcs, nodeF){
		//alert("entro a animation: "+arcs)


		if(this.arc_cont<arcs.length){

			var arc=arcs[this.arc_cont]
			var nodes=arc.split(',')


			this.NodeSeleccion(this.anodes[nodes[0]].node.name, "red")
			
			
			if(nodeF == nodes[1]){
				this.NodeSeleccion(this.anodes[nodeF].node.name, "green")
				//alert("nodef  "+this.raiz.Aedges[arcs[this.arc_cont]])
				this.EdgeSeleccion(this.aedges[arc], "green")
			}
			else{
				this.NodeSeleccion(this.anodes[nodes[1]].node.name, "red")
				//alert("node  "+this.raiz.Aedges[arcs[this.arc_cont]])
				this.EdgeSeleccion(this.aedges[arc], "red")
			}

			
			

			this.arc_cont+=1

		}else{
			
			if(!this.fin_animacion){
				if(nodeF!=null){
					this.NodeSeleccion(this.anodes[nodeF].node.name, "green")
					alert("EL NODO SOLUCION ES EL: "+nodeF)
				}else{
					alert("NO EXISTE SOLUCION")
				}
				this.fin_animacion=true
			}
			
			
			
		}



		
	}

	

}
