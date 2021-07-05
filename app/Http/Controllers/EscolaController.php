<?php

namespace App\Http\Controllers;
use App\Models\escola;
use App\Models\sala;
use Illuminate\Http\Request;

class EscolaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $escolas = escola::all();
        return view('home', compact('escolas'));
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
        
        $request->validate([
            'nome' => 'required',
            
        ]);
       
        $escola = new escola();
        $escola->nome = $request->nome;
        $escola->localizacao = $request->localizacao;
        $escola->impressora = $request->impressora;
        $escola->senhas = $request->senhas;
        $escola->ip = $request->ip;
        $escola->ups = $request->ups;
        $escola->contacto = $request->contacto;
        $escola->outro = $request->outro;
    
        $escola->save();
   
        return redirect()->back()->with('success', 'escola criada com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {  
        $escola = escola::findOrFail($id);
        $salas = sala::all();
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
        return view('salas.esedit', compact('escola'));
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
        $request->validate([
            'nome' => 'required'
        ]);

        $escola->nome = $request->nome;
        $escola->localizacao = $request->localizacao;
        $escola->impressora = $request->impressora;
        $escola->senhas = $request->senhas;
        $escola->ip = $request->ip;
        $escola->ups = $request->ups;
        $escola->contacto = $request->contacto;
        $escola->outro = $request->outro;
        $escola->save();
        return redirect()->route('escolas.index')->with('warning', 'escola editada com sucesso');

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $escola = escola::findOrFail($id);
        $escola->delete();
        return back();
    }
}
