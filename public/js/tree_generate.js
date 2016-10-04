function Tree (){
  	this.raiz=null
	

	this.generateTree = function() {

		var node_cont=0
		var max_nodos=this.random(20, 40)
		var min_nodos=this.random(5,19)
		var queue=[]
		var maxprof=this.random(5, 9)
		var prof=0
		var rand=this.random(-1, maxprof-1)
		var hijos=this.random(1, 4)
		//alert("rand: "+rand+"     maxprof: "+maxprof)

		this.raiz=new Node("0")
		//this.raiz.shape='dot'
		//this.raiz.color='black'
		//this.raiz.label='RAIZ'
		if(rand==0)
			this.raiz.setValue(true)

		
		



			//Se agrega el nodo a la cola de visitas

        queue.push(this.raiz)

		//Hasta que visite todos los nodos

        //alert('raiz name: '+this.raiz.name+"  raiz nodes_: "+this.raiz.nodes)

        while (queue.length!=0 && node_cont<max_nodos && prof<maxprof) {

			var tesoro=-1

			
			if(rand==prof){
				tesoro=this.random(0, hijos-1)
			}

			//alert("rand: "+rand+"    prof: "+prof+"   tesoro: "+tesoro)


            var nodo = queue.shift() //Se saca el primero nodo de la cola

            //alert("nodo name: "+nodo.name+"   node nodes: "+node.nodes)
           
			//Se busca en la matriz que representa el grafo los nodos adyacentes

            for (i = 0; i < hijos; i++) {

			//Si es un nodo adyacente y no está visitado entonces

                node_cont+=1
				var n=new Node(node_cont+'')
				if(tesoro==i)
					n.setValue(true)

				//alert("tesoro: "+tesoro+"   i: "+i+"    tesoro==i: "+(tesoro==i))
				
				
				//añadimos los hijos del nodo raiz a una lista

				//añadiendo el arco al nodo raiz de momento
				nodo.addNode(n)

				//alert("añadiendo nodo: "+node.name+"   a raiz: "+raiz.name)

				nodo.addArc(nodo.name+','+n.name)

				queue.push(n)

				

            }

            prof+=1

            hijos=this.random(0, 4)
	        

        }

	}

	/*this.generateTree = function(prof, maxprof, raiz, rand){
		if(this.node_cont>this.max_nodos)
			prof=maxprof
		else
			if(prof>=maxprof )
				maxprof+=1

		if(prof<maxprof){
			var hijos=this.random(1, 4)
			var tesoro=-1

			if(rand==prof){
				tesoro=this.random(0, hijos-1)
			}

			
			
			for(var i=0;i<hijos;i++){

				this.node_cont+=1
				var n=new Node(this.node_cont+'')
				if(tesoro==i)
					n.setValue(true)
				
				
				//añadimos los hijos del nodo raiz a una lista

				//añadiendo el arco al nodo raiz de momento
				raiz.addNode(n)

				//alert("añadiendo nodo: "+node.name+"   a raiz: "+raiz.name)

				raiz.addArc(raiz.name+','+n.name)
			
				this.generateTree(prof+1, maxprof, n, rand)
			}
		}
	}*/



	this.random = function(min, max){
		return min+Math.floor(Math.random()*(max-min+1))
	}

	/*this.createTree = function(){
		var profundidad=this.random(3, 5)
		var rand=this.random(-1, profundidad)
		this.raiz=new Node("0")
		//this.raiz.shape='dot'
		//this.raiz.color='black'
		//this.raiz.label='RAIZ'
		if(rand==0)
			this.raiz.setValue(true)

		this.min_nodos=this.random(5,19)
		this.max_nodos=this.random(20, 40)
		this.generateTree(1, profundidad, this.raiz,  rand)
		
		//alert(this.raiz.name+"    print: "+this.raiz.print())
	}*/




}














