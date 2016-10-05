function BusquedaCiega(raiz){

	this.raiz=raiz
	this.queue=[]
    this.stack=[]
	this.visited=[]
    this.nodesol=null
    this.arcos_recorridos=[]


	this.recorridoAnchura = function() {

        this.visited[this.raiz.name] = true

		//Se agrega el nodo a la cola de visitas

        this.queue.push(this.raiz)

        var fstack=[]

		//Hasta que visite todos los nodos

        //alert('raiz name: '+this.raiz.name+"  raiz nodes_: "+this.raiz.nodes)

        while (this.queue.length!=0) {

            var nodo = this.queue.shift() //Se saca el primero nodo de la cola

            //alert("nodo name: "+nodo.name+"   node nodes: "+node.nodes)
            //alert("estoy en nodo: "+nodo.name+"   value: "+nodo.value)

            if(fstack.length!=0){
                this.arcos_recorridos.push(fstack.shift().name+','+nodo.name)
            }

            if(nodo.value){
                this.nodesol=nodo.name
            	return 1
            }
            

		//Se busca en la matriz que representa el grafo los nodos adyacentes
            
            for (i = 0; i < nodo.nodes.length; i++) {

		//Si es un nodo adyacente y no está visitado entonces
                //alert("node: "+nodo.nodes[i].name+"   visited: "+this.visited[nodo.nodes[i].name])
                
                if (!this.visited[nodo.nodes[i].name]) {
                    
                    this.queue.push(nodo.nodes[i]);//Se agrega a la cola de visitas                    

                    this.visited[nodo.nodes[i].name] = true;//Se marca como visitado

                    fstack.push(nodo)
                }
            }
        }
        return -1
	}


    this.recorridoProfundidad =function(arcos_recorridos) {

        //alert("raiz: "+raiz.name+"   raiz nodes: "+raiz.print()+"   arcos_recorridos: "+arcos_recorridos)

        //agregamos origen a la pila S
        this.stack.push(this.raiz)

        var fstack=[]

        //marcamos origen como visitado
        this.visited[this.raiz.name]=true

        //mientras S no este vacío:
        while(this.stack.length!=0){
      
            //sacamos un elemento de la pila S llamado v
            var nodo=this.stack.pop()

            if(fstack.length!=0){
                this.arcos_recorridos.push(fstack.pop().name+','+nodo.name)
            }

            if(nodo.value){
                this.nodesol=nodo.name
                return -1
            }
   
            //para cada vertice w adyacente a v en el Grafo:
            for(i=0; i<nodo.nodes.length; i++){

                //si w no ah sido visitado:
                if(!this.visited[nodo.nodes[i].name]){

                    //marcamos como visitado w
                    this.visited[nodo.nodes[i].name]=true

                    //insertamos w dentro de la pila S
                    this.stack.push(nodo.nodes[i])

                    fstack.push(nodo)
                }
            }  
        }
        return -1    
    }


	
}