@extends('layouts.admin')

@section('content')
<div id="main">
  <div>
    <div class="float-start">
    <h4 class="pb-3">{{$outros->nome}}</h4>
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
                                      <label for="nomeoutros">Nome</label>
                                      <input type="text" id="nomeoutros" class="form-control" value="{{ $outros->nomeoutros }}" name="nomeoutros">
                                  </div>
                              </div>
                              <br>
                              <div class="col-md-8 col-12">
                                  <div class="form-group">
                                      <label for="descricao">descricao</label>
                                      <input type="text" id="descricao" class="form-control" value="{{ $outros->descricao }}" name="descricao">
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
