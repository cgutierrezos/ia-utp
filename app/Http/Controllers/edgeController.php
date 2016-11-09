<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\node;

use App\edge;

use App\grafo;

use Auth;

use Validator;

class edgeController extends Controller
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
        //
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
            'inicio' => 'required|alpha_num',
            'fin' => 'required|alpha_num|different:inicio',
            'valor' => 'required|integer|min:1|max:999999'
        ]);
 
        if ($v->fails())
        {
            return redirect()->back()->withInput()->withErrors($v->errors());
        }


        $node1 =node::where('name',$request->inicio)->get();
        if(count($node1)==0){
            $node1=new node();
            $node1->grafo_id=grafo::where('user_id', Auth::user()->id)->firts()->id;
            $node1->name=$request->inicio;
            $node1->value=0;
            $node1->save();
        }
        

        
        $node2 =node::where('name',$request->fin)->get();
        if(count($node2)==0){
            $node2=new node();
            $node2->grafo_id=grafo::where('user_id', Auth::user()->id)->firts()->id;
            $node2->name=$request->fin;
            $node2->value=0;
            $node2->save();
        }
        

        $edge =edge::where('nodei_id',$request->inicio)->where('nodef_id',$request->fin)->get();
        if(count($edge)==0){;
            $edge=new edge();
            $edge->grafo_id=grafo::where('user_id', Auth::user()->id)->firts()->id;
            $edge->nodei_id=node::where('name',$request->inicio)->get()->first()->id;
            $edge->nodef_id=node::where('name',$request->fin)->get()->first()->id;
            $edge->value=$request->valor;
            $edge->save();
        }
        


        return redirect('animaciones/grafo/edit'.grafo::where('user_id', Auth::user()->id)->firts()->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idg, $id)
    {
        $edge =edge::find($id)->first();
        
        $edgesi = edge::where('grafo_id', $edge->grafo_id)->where('nodei_id', $edge->nodei_id)->orWhere('nodef_id', $edge->nodei_id)->get();
        if(count($edgesi)<=1){
            node::remove($edge->nodei_id);
        }

        $edgesf = edge::where('grafo_id', $edge->grafo_id)->where('nodei_id', $edge->nodef_id)->orWhere('nodef_id', $edge->nodef_id)->get();
        if(count($edgesf)<=1){
            node::remove($edge->nodef_id);
        }

        edge::remove($id);

        return redirect('animaciones/grafo/edit/'.$idg);
    }
}
