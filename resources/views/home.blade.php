@extends('layouts.admin')
@section('content')
<div id="main">
    @if (\Session::has('success'))
    <div class="alert alert-success">
        <li>{!! \Session::get('success') !!}</li>
    </div>
    @endif

    <div class="page-heading">
        <h3>Suporte técnico do Concelho de Benavente </h3>
        <p class="text-subtitle text-muted">Bem vindo(a) {{ Auth::user()->name }}</p>
    </div>
    
    @if (\Session::has('warning'))
    <div class="pt-5"></div>
    <div class="alert alert-warning">
      <li>{!! \Session::get('warning') !!}</li>
    </div> 
    <div class="pt-5"></div>
    @endif
    
    <div class="page-content">
        <section class="row">
            <div class="col-12 col-md-12">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <section id="escolas" class="escolas">
                                <div class="row">
                                    <div class="col-12 col-xl-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4>Escolas de Benavente</h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="table-responsive-lg">
                                                @forelse ($escolas as $escola)
                                                @if ($escola->localizacao=='Benavente')
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td class="col-5">
                                                                <a href="{{ route('escolas.show', $escola->id) }}"class="d-flex align-items-center">
                                                                    <p  class="font-bold ms-3 mb-0">{{$escola->nome}}</p>
                                                                </a>
                                                                        
                                                            </td>
                                                            <td>
                                                                <div class="float-end">
          
                                                                    <a href="{{ route('escolas.edit', $escola->id) }}" type="button" class="btn btn-outline-warning">
                                                                        <i class="bi bi-pencil-square"></i>
                                                                            
                                                                        </a>
                                                                    </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                @endif
                                                @empty
                                                ainda sem escolas
                                                @endforelse
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col-12 col-xl-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Escolas de Samora Correia</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive-lg">
                                            @forelse ($escolas as $escola)
                                            @if ($escola->localizacao=='Samora Correia')
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td class="col-5"> 
                                                            <a href="{{ route('escolas.show', $escola->id) }}"class="d-flex align-items-center">
                                                                <p  class="font-bold ms-3 mb-0">{{$escola->nome}}</p>
                                                            </a>
                                                                    
                                                        </td>
                                                        <td>
                                                            <div class="float-end">
          
                                                                <a href="{{ route('escolas.edit', $escola->id) }}" type="button" class="btn btn-outline-warning">
                                                                    <i class="bi bi-pencil-square"></i>
                                                                            
                                                                    </a>
                                                            </div>
                                                                      
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            @endif
                                            @empty
                                            ainda sem escolas
                                            @endforelse
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
        

@endsection
