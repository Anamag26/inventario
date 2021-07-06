@extends('layouts.admin')

@section('content')

<div id="main">
  <div class="page-title">
    @if ($sala->id_escola=='1')
        <h4>EB1</h4>

    @elseif ($sala->id_escola=='2')
        <h4>Centro Escolar</h4>

    @elseif($sala->id_escola=='3')
        <h4>Areias</h4>

    @elseif($sala->id_escola=='4')
        <h4>Foros da Charneca</h4>

    @elseif($sala->id_escola=='5')
        <h4>Barrosa</h4>

    @elseif($sala->id_escola=='6')
        <h4>Santo Estevão</h4>

    @elseif($sala->id_escola=='7')
        <h4>Sénior de Benavente</h4>

    @elseif($sala->id_escola=='8')
        <h4>EB1 Escudeiros</h4>

    @elseif($sala->id_escola=='9')
        <h4>Centro Escolar</h4>

    @elseif($sala->id_escola=='10')
        <h4>Acácias</h4>

    @elseif($sala->id_escola=='11')
        <h4>EB das Acácia</h4>

    @elseif($sala->id_escola=='12')
        <h4>Escola Velha do Porto Alto</h4>

    @elseif($sala->id_escola=='13')
        <h4>C.E. Porto Alto</h4>

    @elseif($sala->id_escola=='14')
        <h4>Sénior do Porto Alto</h4>

    @endif
    <div class="row">
    </div>
  </div>
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
                                      <label for="hostname">Hostname</label>
                                      <input type="text" id="hostname" class="form-control" value="{{ $sala->hostname }}" name="hostname">
                                  </div>
                              </div>
                              <br>
                              <div class="col-md-8 col-12">
                                  <div class="form-group">
                                      <label for="maquina">Maquina</label>
                                      <input type="text" id="maquina" class="form-control" value="{{ $sala->maquina }}" name="maquina">
                                  </div>
                              </div>
                              <br>
                              <div class="col-md-8 col-12">
                                  <div class="form-group">
                                      <label for="monitor">Monitor</label>
                                      <input type="text" id="monitor" class="form-control" value="{{ $sala->monitor }}" name="monitor">
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
                             
                              <div class="col-md-8">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="estadoprojetor" value="p1" {{ ($sala->estadoprojetor=="p1")? "checked" : "" }} id="estadoprojetor">
                                    <label class="form-check-label" for="estadoprojetor">P1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="estadoprojetor" value="p2" {{ ($sala->estadoprojetor=="p2")? "checked" : "" }} id="estadoprojetor">
                                    <label class="form-check-label" for="estadoprojetor">P2</label>
                                </div>  
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="estadoprojetor" value="p3" {{ ($sala->estadoprojetor=="p3")? "checked" : "" }} id="estadoprojetor">
                                    <label class="form-check-label" for="estadoprojetor">P3</label>
                                </div>  
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="estadoprojetor" value="p4" {{ ($sala->estadoprojetor=="p4")? "checked" : "" }} id="estadoprojetor">
                                    <label class="form-check-label" for="estadoprojetor">P4</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="estadoprojetor" value="p5" {{ ($sala->estadoprojetor=="p5")? "checked" : "" }} id="estadoprojetor">
                                    <label class="form-check-label" for="estadoprojetor">P5</label>
                                </div>
                                
                            </div>

                              <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="observacoes">observacoes</label>
                                    <input type="text" id="observacoes" class="form-control" name="observacoes"  value="{{ $sala->observacoes}}">
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
