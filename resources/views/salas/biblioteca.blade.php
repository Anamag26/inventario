@extends('layouts.admin')

@section('content')
<div id="main">
  
  <div class="container">
     @if (\Session::has('success'))
  <div class="alert alert-success">
   
      <li>{!! \Session::get('success') !!}</li>
    
  </div>
@endif
  </div>
 
<div>
  
  <div class="float-start">
    <h4 class="pb-3">{{$escola->nome}} - Biblioteca </h4>  
    <a href="{{ route('outros.show', $escola->id) }}" type="button" class="btn btn-outline-secondary">
      Professores e outros
     </a>  
  </div>

  
  <div class="float-end">
  
    <button type="button" class="btn btn-outline-secondary block" data-bs-toggle="modal" data-bs-target="#exampleModal">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"></path>
      </svg>
      Criar Sala
    </button>
    <a type="button" class="btn btn-primary" href="{{ route('escolas.show', $escola->id) }}">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
      </svg>
    Voltar para Salas
  </a>
  </div>
</div> 
<div class="clearfix"></div>

<div class="modal fade show" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-modal="true" role="dialog">
  <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Criar Sala</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <i data-feather="x"></i>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('biblioteca.store') }}" method="POST">
          @csrf
          <form class="row g-3">
            <div class="col-md-6">
              <label for="nomemaquina" class="form-label">Nome da maquina</label>
              <input type="text" class="form-control" id="nomemaquina" name="nomemaquina" data-msg="porfavor insira uma sala valida">
              @error('nomemaquina')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <p></p>
            <div class="col-md-6">
              <label for="descricao" class="form-label">Descrição</label>
              <input type="text" class="form-control" id="descricao" name="descricao">
            </div>
            <p></p>

            <div class="col-md-6">
              
              <input type="hidden" class="form-control" name="id_escola" id="id_escola" value="{{ $escola->id }}">
              @error('id_escola')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <p></p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
              <i class="bx bx-x d-block d-sm-none"></i>

              <span class="d-none d-sm-block">Close</span>
            </button>
            <button  type="submit" class="btn btn-primary ml-1" >
              <i class="bi bi-check2-square"></i>
              Criar
            </button>
          </div>
        </form>
      </form>
    </div>
  </div>
</div>

<div class="container">
  <div class="row row-cols-3">
    @foreach ($bibliotecas as $biblioteca)
    @if ($biblioteca->id_escola==$escola->id)
    <div class="col">
      <div class="card mt-3">
        <h5 class="card-header">
          {{$biblioteca->nomemaquina}}  
        </h5>
        <div class="card-body">
          <b>{{$biblioteca->descricao}}</b>   
          <br>
          <p></p>
           <a href="{{ route('biblioteca.edit', $biblioteca->id) }}" type="button" class="btn btn-outline-warning">
            <i class="bi bi-pencil-square"></i>
            Editar
          </a>  
           
          <form action="{{ route('biblioteca.destroy', $biblioteca->id) }}" style="display: inline" method="POST" onsubmit="return confirm('Tem a certeza que quer eliminar esta maquina ?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-outline-danger">
              <i class="bi bi-x-square"></i>
              
              Remover
            </button>
            <p></p>
            Ultima alteração {{$biblioteca->updated_at->format('d-m-y')}}
          </form>
        </div>
      </div>
    </div>
    @endif
    @endforeach
    
   
  </div>
</div>



@endsection