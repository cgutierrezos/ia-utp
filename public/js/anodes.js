function Anode(node){
	this.node=node
	this.anodes=[]
	this.aedges=[]
	this.color='blue'
	this.shape=''
	this.label=this.node.name


	this.addAnode=function(anode){
		this.anodes[anode.node.name]=anode
	}

	this.addAedge=function(edge, aedge){
		this.aedges[edge]=aedge
	}

	this.setNode=function(node){
		this.node=node
	}

	this.getAnode= function(node){
		var n=this.anodes[node]
		//alert("n tipo: "+typeof(n)+"   undefined?"+(n==undefined))
		if(n==undefined)
			return this

		return n
	}



}