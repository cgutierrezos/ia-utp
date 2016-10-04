function BusquedaCiega(raiz){

	this.raiz=raiz
	this.queue=[]
	this.visited=[]
    this.nodesol=null
    this.arcos_recorridos=[]


	this.recorridoAnchura = function() {

       
        
        
        this.visited[this.raiz.name] = true

		

		//Se agrega el nodo a la cola de visitas

        this.queue.push(this.raiz)

		//Hasta que visite todos los nodos

        //alert('raiz name: '+this.raiz.name+"  raiz nodes_: "+this.raiz.nodes)

        while (this.queue.length!=0) {

            var nodo = this.queue.shift() //Se saca el primero nodo de la cola

            //alert("nodo name: "+nodo.name+"   node nodes: "+node.nodes)
            //alert("estoy en nodo: "+nodo.name+"   value: "+nodo.value)
            if(nodo.value){
                this.nodesol=nodo.name
            	return 1
            }
            

		//Se busca en la matriz que representa el grafo los nodos adyacentes
            
            for (i = 0; i < nodo.nodes.length; i++) {

		//Si es un nodo adyacente y no está visitado entonces
                //alert("node: "+nodo.nodes[i].name+"   visited: "+this.visited[nodo.nodes[i].name])
                
                if (!this.visited[nodo.nodes[i].name]) {

                    //alert("visitando nodo: "+nodo.nodes[i].name)

                	this.arcos_recorridos.push(nodo.name+','+nodo.nodes[i].name)
                    
                    this.queue.push(nodo.nodes[i]);//Se agrega a la cola de visitas                    

                    this.visited[nodo.nodes[i].name] = true;//Se marca como visitado

                }

            }

        }

        return -1

	}


    this.recorridoProfundidad =function(raiz, arcos_recorridos, visited) {

        alert("raiz: "+raiz.name+"   raiz nodes: "+raiz.print()+"   arcos_recorridos: "+arcos_recorridos)
        
        //El nodo inicial ya está visitado
        var nodo=raiz
        
        visited[nodo.name] = true
        //Cola de visitas de los nodos adyacentes
        //Se lista el nodo como ya recorrido

        //Se agrega el nodo a la cola de visitas

         //Se busca en la matriz que representa el grafo los nodos adyacentes
        if(nodo.value){
            this.nodesol=nodo.name
            this.arcos_recorridos=arcos_recorridos
            return -1
        }

        for (i = 0; i < nodo.nodes.length; i++) {

        //Si es un nodo adyacente y no está visitado entonces

            if (!visited[nodo.nodes[i].name]) {

                arcos_recorridos.push(nodo.name+','+nodo.nodes[i].name)
                this.recorridoProfundidad(nodo.nodes[i], arcos_recorridos, visited)

            }

            
        }


        

        
        
    }


	
}