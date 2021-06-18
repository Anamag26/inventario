@extends('layouts.admin')

@section('content')
<div id="main">
  <div>
    <div class="float-start">
    <h4 class="pb-3">{{$biblioteca->nomemaquina}}</h4>
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
        <form action="{{ route('biblioteca.update', $biblioteca->id) }}" method="POST">
          @csrf
          @method('PUT')
          <div class="card">
             <div class="card-content">
                  <div class="card-body">
                      <form class="form">
                          <div class="row">
                              <div class="col-md-6 col-12">
                                  <div class="form-group">
                                      <label for="nomemaquina">Nome da maquina</label>
                                      <input type="text" id="nomemaquina" class="form-control" value="{{ $biblioteca->nomemaquina }}" name="nomemaquina">
                                  </div>
                              </div>
                              <br>
                              <div class="col-md-8 col-12">
                                  <div class="form-group">
                                      <label for="descricao">Descrição</label>
                                      <input type="text" id="descricao" class="form-control" value="{{ $biblioteca->descricao }}" name="descricao">
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
