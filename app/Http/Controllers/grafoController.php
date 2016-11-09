<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\edge;
use App\node;
use App\grafo;
use Validator;
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

        $v = Validator::make($request->all(), [
            'nombre' => 'required|alpha_num'
        ]);
 
        if ($v->fails())
        {
            return redirect()->back()->withInput()->withErrors($v->errors());
        }


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

        $v = Validator::make($request->all(), [
            'inicio_ruta' => 'required|different:fin_ruta|exists:nodes,name,grafo_id,'.$id,
            'fin_ruta' => 'required|exists:nodes,name,grafo_id,'.$id
        ]);
 
        if ($v->fails())
        {
            return redirect()->back()->withInput()->withErrors($v->errors());
        }

        $nodes= node::where('grafo_id', $id)->get()->all();
        $edges = edge::where('grafo_id', $id)->get()->all();        
        return view('home.animacion.animacion2', ['search' => 2, 'nodes' => $nodes, 'edges' => $edges, 'inicio' => $request->inicio_ruta, 'fin' => $request->fin_ruta]);
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

        $v = Validator::make($request->all(), [
            'inicio' => 'required|alpha_num',
            'fin' => 'required|alpha_num|different:inicio',
            'valor' => 'required|integer|min:1|max:999999'
        ]);
 
        if ($v->fails())
        {
            return redirect()->back()->withInput()->withErrors($v->errors());
        }

        $node1 = node::where('name', $request->inicio)->where('grafo_id', $id)->get()->first();
        if(count($node1)==0){
            $node1=new node();
            $node1->grafo_id=$id;
            $node1->name=$request->inicio;
            $node1->value=0;
            $node1->save();
        }
        

        
        $node2 = node::where('name', $request->fin)->where('grafo_id', $id)->get()->first();
        if(count($node2)==0){
            $node2=new node();
            $node2->grafo_id=$id;
            $node2->name=$request->fin;
            $node2->value=0;
            $node2->save();
        }
        

        $edge =edge::where('nodei_id', $node1->id)->where('nodef_id', $node2->id)->where('grafo_id', $id)->get();
        if(count($edge)==0){;
            $edge=new edge();
            $edge->grafo_id=$id;
            $edge->nodei_id=$node1->id;
            $edge->nodef_id=$node2->id;
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
        return redirect('animaciones/grafo/create');
    }
}
