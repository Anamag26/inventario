<?php

namespace App\Http\Controllers;
use App\Models\escola;
use App\Models\sala;
use App\Models\biblioteca;
use Illuminate\Http\Request;

class BibliotecaController extends Controller
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
        return view('salas.biblioteca');
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
            'nomemaquina' => 'required',
            
        ]);

        $biblioteca = new biblioteca();
        $biblioteca->nomemaquina = $request->nomemaquina;
        $biblioteca->descricao = $request->descricao;
        $biblioteca->id_escola = $request->id_escola;
    
        $biblioteca->save();
        return redirect()->back()->with('success', 'maquina criada com sucesso');
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
        $bibliotecas = biblioteca::all();
        return view('salas.biblioteca', compact('escola','bibliotecas'));
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
        $biblioteca = biblioteca::findOrFail($id);
        return view('salas.biedit', compact('escola','biblioteca'));
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
        $biblioteca = biblioteca::findOrFail($id);
        $request->validate([
            'nomemaquina' => 'required'
        ]);
        $biblioteca->nomemaquina = $request->nomemaquina;
        $biblioteca->descricao = $request->descricao;
        $biblioteca->save();
        return redirect()->back()->with('message','Operation Successful !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $biblioteca = biblioteca::findOrFail($id);
        $biblioteca->delete();
        return back();
    }
}
