function Node(name){
	this.arcs=[]
	this.nodes=[]
	this.value=false
	this.name=name
	

	this.getNode=function(name){
		for(i=0 ; i<this.nodes.length; i++){
			if(name==this.node[i])
				return this.node[i]
		}
		return null
	}

	

	this.addArcs= function(arcs){
		this.arcs=this.arcs.concat(arcs)
	}

	this.addArc=function(arc){
		this.arcs.push(arc)
	}

	this.addNode=function(node){
		this.nodes.push(node)
	}

	this.addNodes=function(nodes){
		this.nodes=this.nodes.concat(nodes)
	}

	this.setValue= function(value){
		this.value=value
	}

	this.setName=function(name){
		this.name=name
	}

	

	this.print= function(){
		var queue=[]

		var cadena=''

		queue.push(this)

        

        while (queue.length!=0) {

            var nodo = queue.shift() //Se saca el primero nodo de la cola


		//Se busca en la matriz que representa el grafo los nodos adyacentes

            for (var i = 0; i < nodo.nodes.length; i++) {

				queue.push(nodo.nodes[i]);

				cadena+='['+nodo.name+':'+nodo.value+'  -  '+nodo.nodes[i].name+':'+nodo.nodes[i].value+']  '

            }

        }

        return cadena
	}


}