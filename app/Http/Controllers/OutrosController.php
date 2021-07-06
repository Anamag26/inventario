<?php

namespace App\Http\Controllers;
use App\Models\sala;
use App\Models\escola;
use App\Models\outros;
use Illuminate\Http\Request;

class OutrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        
        return view('salas.outros');
    } 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nomeoutros' => 'required',
            
        ]);
        $outros = new outros();
        $outros->nomeoutros = $request->nomeoutros;
        $outros->hostname = $request->hostname;
        $outros->maquina = $request->maquina;
        $outros->monitor = $request->monitor;
        $outros->impressora=$request->impressora;
        $outros->observacoes = $request->observacoes;
        $outros->id_escola = $request->id_escola;
        $outros->save();
        return redirect()->back()->with('success', 'maquina criada com sucesso');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) //nao mudar
    {
        $escola = escola::findOrFail($id);
        $outros = outros::all();
        return view('salas.outros', compact('escola','outros'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    { 
        $escola = escola::findOrFail($id);
        $outros = outros::findOrFail($id);
        return view('salas.ouedit', compact('escola','outros'));
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
        $escola = escola::findOrFail($id);
        $outros = outros::findOrFail($id);
        $request->validate([
            'nomeoutros' => 'required'
        ]);
        $outros->nomeoutros = $request->nomeoutros;
        $outros->hostname = $request->hostname;
        $outros->maquina = $request->maquina;
        $outros->monitor = $request->monitor;
        $outros->impressora=$rerquest->impressora;
        $outros->observacoes = $request->observacoes;
        $outros->save();
        return redirect()->back()->with('message','Operation Successful !');
    } 

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)//nao mudar
    {
        $outros = outros::findOrFail($id);
        $outros->delete();
        return back();
    }

   
}
