@extends('layouts.admin')

@section('content')

<div id="main">
  <div class="page-title">
    <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
          <h3 class="pb-3">{{ $escola->nome}}</h3>
        </div>
        
    </div>
  </div>
  <div>
    <div class="float-start">
    <h4 class="pb-3">{{$outros->nomeoutros}}</h4>
  </div>
  <div class="float-end">
  <a type="button" class="btn btn-primary"onclick="history.go(-1);">
    Voltar
  </a>
  </div>
</div> 
<div class="clearfix"></div>
<section id="multiple-column-form">
  <div class="row match-height">
      <div class="col-12">
        <form action="{{ route('outros.update', $outros->id) }}" method="POST">
          @csrf
          @method('PUT')
          <div class="card">
             <div class="card-content">
                  <div class="card-body">
                      <form class="form">
                          <div class="row">
                              <div class="col-md-6 col-12">
                                  <div class="form-group">
                                      <label for="nome">Nome da Maquina</label>
                                      <input type="text" id="nome" class="form-control" value="{{ $outros->nome }}" name="nome">
                                  </div>
                              </div>
                              <br>
                              <div class="col-md-8 col-12">
                                  <div class="form-group">
                                      <label for="hostname">Hostname</label>
                                      <input type="text" id="hostname" class="form-control" value="{{ $outros->hostname }}" name="hostname">
                                  </div>
                              </div>
                              <br>
                              <div class="col-md-8 col-12">
                                  <div class="form-group">
                                      <label for="maquina">Maquina</label>
                                      <input type="text" id="maquina" class="form-control" value="{{ $outros->maquina }}" name="maquina">
                                  </div>
                              </div>
                              <br>
                              <div class="col-md-8 col-12">
                                  <div class="form-group">
                                      <label for="monitor">Monitor</label>
                                      <input type="text" id="monitor" class="form-control" value="{{ $outros->monitor }}" name="monitor">
                                  </div>
                              </div>
                              <div class="col-md-6 col-12">
                                  <div class="form-group">
                                      <label for="impressora">Impressora</label>
                                      <input type="text" id="impressora" class="form-control"  value="{{ $outros->impressora }}" name="impressora">
                                  </div>
                              </div>
                              <div class="col-md-6 col-12">
                                  <div class="form-group">
                                      <label for="projetor">Projetor</label>
                                      <input type="text" id="projetor" class="form-control" name="projetor"  value="{{ $outros->projetor }}">
                                  </div>
                              </div>
                              <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="observacoes">observacoes</label>
                                    <input type="text" id="observacoes" class="form-control" name="observacoes"  value="{{ $outros->observacoes}}">
                                </div>
                            </div>
                              
                             
                              <div class="col-12 d-flex justify-content-end">
                                  <button type="submit" class="btn btn-primary ">Salvar</button>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
        </form>
      </div>
  </div>
</section>
</div>
@endsection
