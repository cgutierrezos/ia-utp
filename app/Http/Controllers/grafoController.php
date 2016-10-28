<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\edge;
use App\node;
use App\grafo;

use Auth;




class grafoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $grafos =grafo::where('user_id', Auth::user()->id)->get()->all();
        return view('home.grafos.grafo_create', ['grafos' => $grafos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $grafo = new grafo();
        $grafo->name = $request->nombre;
        $grafo->user_id = Auth::user()->id;
        $grafo->save();

        $grafos =grafo::where('user_id', $grafo->user_id)->get()->all();
        return view('home.grafos.grafo_create', ['grafos' => $grafos]);
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showRuta(Request $request, $id)
    {

        $nodes= node::where('grafo_id', $id)->get()->all();
        $edges = edge::where('grafo_id', $id)->get()->all();        
        return view('home.animacion.animacion2', ['search' => 2, 'nodes' => $nodes, 'edges' => $edges, 'inicio' => $request->inicio, 'fin' => $request->fin]);
    }

    public function showAnchura(){
        return view('home.animacion.animacion2', ['search' => 0, 'nodes' => [], 'edges'=> [], 'inicio' => 0, 'fin' => 0]);
    }

    public function showProfundidad(){
        return view('home.animacion.animacion2', ['search' => 1, 'nodes' => [], 'edges'=> [], 'inicio' => 0, 'fin' => 0]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edges = edge::where('grafo_id', $id)->get()->all();
        return view('home.grafos.grafo_edit', ['grafo' => $id, 'edges' => $edges]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $node1 =node::where('name',$request->inicio)->get();
        if(count($node1)==0){
            $node1=new node();
            $node1->grafo_id=$id;
            $node1->name=$request->inicio;
            $node1->value=0;
            $node1->save();
        }
        

        
        $node2 =node::where('name',$request->fin)->get();
        if(count($node2)==0){
            $node2=new node();
            $node2->grafo_id=$id;
            $node2->name=$request->fin;
            $node2->value=0;
            $node2->save();
        }
        

        $edge =edge::where('nodei_id',$request->inicio)->where('nodef_id',$request->fin)->get();
        if(count($edge)==0){;
            $edge=new edge();
            $edge->grafo_id=$id;
            $edge->nodei_id=node::where('name',$request->inicio)->get()->first()->id;
            $edge->nodef_id=node::where('name',$request->fin)->get()->first()->id;
            $edge->value=$request->valor;
            $edge->save();
        }
        


        return redirect('animaciones/grafo/edit/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $grafo =grafo::destroy($id);
        return redirect('grafo/create');
    }
}