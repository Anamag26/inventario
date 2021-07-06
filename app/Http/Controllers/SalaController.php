<?php

namespace App\Http\Controllers;
use App\Models\sala;
use App\Models\escola;
use App\Models\biblioteca;
use App\Models\outros;
use Illuminate\Http\Request;

class SalaController extends Controller
{
     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $search_text=$_GET['query'];
        
        $bibliotecas=biblioteca::where(
            'nomemaquina', 'LIKE', '%' .$search_text.'%'
            )
            ->orwhere(
            'hostname','LIKE', '%'.$search_text.'%'
            )
            ->orwhere(
            'maquina','LIKE', '%'.$search_text.'%'
                )
            ->orwhere(
            'monitor','LIKE', '%'.$search_text.'%'
            )
            ->orwhere(
            'observacoes','LIKE', '%'.$search_text.'%'
            )
            ->get();

            $outros=outros::where(
                'nomeoutros', 'LIKE', '%' .$search_text.'%'
                )
                ->orwhere(
                'hostname','LIKE', '%'.$search_text.'%'
                )
                ->orwhere(
                'maquina','LIKE', '%'.$search_text.'%'
                    )
                ->orwhere(
                'monitor','LIKE', '%'.$search_text.'%'
                )
                ->orwhere(
                    'impressora','LIKE', '%'.$search_text.'%'
                    )
                ->orwhere(
                'observacoes','LIKE', '%'.$search_text.'%'
                )
                ->get();
           

        $salas=sala::where(
                'nome','LIKE', '%'.$search_text.'%'
                )
            ->orwhere(
                'impressora','LIKE', '%'.$search_text.'%'
                )
            ->orwhere(
                'hostname','LIKE', '%'.$search_text.'%'
                )
            ->orwhere(
                'maquina','LIKE', '%'.$search_text.'%'
                )
            ->orwhere(
            'monitor','LIKE', '%'.$search_text.'%'
            )
            ->orwhere(
                'projetor','LIKE', '%'.$search_text.'%'
            )
            ->orwhere(
                'observacoes','LIKE', '%'.$search_text.'%'
            )
            ->get();

        
        return view('salas.search',compact('salas','bibliotecas','outros','search_text'));
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
       
        $salas = new sala();
        $salas->nome = $request->nome;
        $salas->impressora = $request->impressora;
        $salas->hostname = $request->hostname;
        $salas->maquina = $request->maquina;
        $salas->monitor = $request->monitor;
        $salas->projetor = $request->projetor;
        $salas->estadoprojetor=$request->estadoprojetor;
        $salas->observacoes = $request->observacoes;
        $salas->id_escola = $request->id_escola;
    
        $salas->save();
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
        
        $sala = sala::findOrFail($id);
        return view('salas.edit', compact('sala'));
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
        $salas = sala::findOrFail($id);
        $escola = escola::findOrFail($id);
        $request->validate([
            'nome' => 'required',
           
        ]);
  
        $salas->update($request->all());
  
        return redirect('/escolas')
        ->with('warning', 'sala editada com sucesso');
    } 
   
     
    public function search()
    {
        //
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