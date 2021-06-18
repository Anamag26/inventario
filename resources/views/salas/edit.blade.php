@extends('layouts.admin')

@section('content')
<div id="main">
  <div>
    <div class="float-start">
    <h4 class="pb-3">{{$sala->nome}}</h4>
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
        <form action="{{ route('salas.update', $sala->id) }}" method="POST">
          @csrf
          @method('PUT')
          <div class="card">
             <div class="card-content">
                  <div class="card-body">
                      <form class="form">
                          <div class="row">
                              <div class="col-md-6 col-12">
                                  <div class="form-group">
                                      <label for="nome">Nome da Sala</label>
                                      <input type="text" id="nome" class="form-control" value="{{ $sala->nome }}" name="nome">
                                  </div>
                              </div>
                              <br>
                              <div class="col-md-8 col-12">
                                  <div class="form-group">
                                      <label for="maquina">Maquina</label>
                                      <input type="text" id="maquina" class="form-control" value="{{ $sala->maquina }}" name="maquina">
                                  </div>
                              </div>
                              <div class="col-md-6 col-12">
                                  <div class="form-group">
                                      <label for="impressora">Impressora</label>
                                      <input type="text" id="impressora" class="form-control"  value="{{ $sala->impressora }}" name="impressora">
                                  </div>
                              </div>
                              <div class="col-md-6 col-12">
                                  <div class="form-group">
                                      <label for="projetor">Projetor</label>
                                      <input type="text" id="projetor" class="form-control" name="projetor"  value="{{ $sala->projetor }}">
                                  </div>
                              </div>
                              <div class="col-md-6">
              
                                <input type="hidden" class="form-control" name="id_escola" id="id_escola" value="{{ $escola->id }}">
                                @error('id_escola')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
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
