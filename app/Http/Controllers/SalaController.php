<?php

namespace App\Http\Controllers;
use App\Models\sala;
use App\Models\escola;
use Redirect;
use Illuminate\Http\Request;

class SalaController extends Controller
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
        
        return view('salas.create');
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
            'nome' => 'required',
            
        ]);

        $sala = new sala();
        $sala->nome = $request->nome;
        $sala->impressora = $request->impressora;
        $sala->maquina = $request->maquina;
        $sala->projetor = $request->projetor;
        $sala->id_escola = $request->id_escola;
    
        $sala->save();
        return redirect()->back()->with('success', 'Sala criada com sucesso');
        
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
        $salas = sala::orderBy('id')->get();
        $salas = $salas->sort();
         
        return view('salas.show', compact('escola','salas'));
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
        $sala = sala::findOrFail($id);
        return view('salas.edit', compact('escola','sala'));
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
        $sala = sala::findOrFail($id);
        $request->validate([
            'nome' => 'required'
        ]);
        $sala->nome = $request->nome;
        $sala->maquina = $request->maquina;
        $sala->impressora = $request->impressora;
        $sala->projetor = $request->projetor;
        $sala->save();
        return redirect()->back()->with('message','Operation Successful !');
    } 
    public function biblioteca($id)//nao mudar
    {
        $escola = escola::findOrFail($id);
        $salas = sala::all();
        return view('salas.biblioteca', compact('escola','salas'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)//nao mudar
    {
        $sala = sala::findOrFail($id);
        $sala->delete();
        return back();
    }

   
}
