function BusquedaGuiada(grafo){

	this.raiz=raiz
	this.queue=[]
    this.stack=[]
	this.visited=[]
    this.nodesol=null
    this.arcos_recorridos=[]


	this.recorridoRutaCorta = function(nodoi) {

        //alert("raiz: "+raiz.name+"   raiz nodes: "+raiz.print()+"   arcos_recorridos: "+arcos_recorridos)

        //agregamos origen a la pila S
        this.stack.push(nodoi)

        var fstack=[]

        //marcamos origen como visitado
        this.visited[nodoi.getName()]=true

        //mientras S no este vacío:
        while(this.stack.length!=0){
      
            //sacamos un elemento de la pila S llamado v
            var nodo=this.stack.pop()

            if(fstack.length!=0){
                var nodo_padre=fstack.pop()
                var arco=this.grafo.getEdges().getEdgeByNodes(nodo_padre, nodo)
                this.arcos_recorridos.push(arco)
            }

            if(nodo.getValue()){
                this.nodesol=nodo
                return 1
            }
            

        //Se busca en la matriz que representa el grafo los nodos adyacentes

            var h_arcos=this.grafo.getEdges().getEdgesFromNode(nodo) 

            for (i = 0; i < h_arcos.length; i++) {

        //Si es un nodo adyacente y no está visitado entonces
                //alert("node: "+nodo.nodes[i].name+"   visited: "+this.visited[nodo.nodes[i].name])
                
                if (!this.visited[h_arcos[i].getNodeF().getName()]) {
                    
                    this.stack.push(h_arcos[i].getNodeF())//Se agrega a la cola de visitas                    

                    this.visited[h_arcos[i].getNodeF().getName()] = true//Se marca como visitado

                    fstack.push(nodo)
                }
            }
   
            //para cada vertice w adyacente a v en el Grafo:
            
        }
        return -1    
    }


}


function Adyacente(d, np, i){
    this.distancia=d
    this.nodo_predecesor=np
    this.iteracion=i

    this.listarCandidatos=function(candidatos){

        var nuevos_candidatos=[]
        if(candidatos.length>0){
            distancias=[]
            for(i=0; i<candidatos.length;i++){
                distancias.push(candidatos[i].distancia)
            }
            distancias.sort()
            
            
            
            for(i=0; i<candidatos.length;i++){
                for(j=0;j<distancias.length;j++){
                    if(candidatos[i].distancia==distancias[j]){
                        nuevos_candidatos.push(candidatos[i])
                        j=candidatos.length
                        distancias[j]=-1
                    }
                } 
            }
                
            

            return nuevos_candidatos
        }
        
    }
}


