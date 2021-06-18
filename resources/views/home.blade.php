@extends('layouts.admin')
@section('content')
<div id="main">
    <div class="page-heading">
        <h3>Suporte técnico do Concelho de Benavente </h3>
    </div>
    <div class="page-content">
        <section class="row">
            <div class="col-12 col-lg-12">
                <div class="row">
                    <div class="card">
                        <div class="card-header">
                            <h4>Bem vindo(a) {{ Auth::user()->name }}</h4>
                            <p></p>
                        </div>
                        <div class="card-body">
                            <div id="" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="">
                                        <img src="{{ asset('admin/assets/images/benavente-header.jpeg') }}" class="d-block w-100" alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                                    <div class="table-responsive">
                                                        @forelse ($escolas as $escola)
                                                        @if ($escola->localizacao=='Benavente')
                                                        <table class="table table-hover table-lg">
                                                            <tbody>
                                                                <tr>
                                                                    <td class="col-5">
                                                                        <a href="{{ route('escolas.show', $escola->id) }}"class="d-flex align-items-center">
                                                                            <p  class="font-bold ms-3 mb-0">{{$escola->nome}}</p>
                                                                        </a>
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
                                                <div class="table-responsive">
                                                    @forelse ($escolas as $escola)
                                                    @if ($escola->localizacao=='Samora Correia')
                                                    <table class="table table-hover table-lg">
                                                        <tbody>
                                                            <tr>
                                                                <td class="col-5"> 
                                                                    <a href="{{ route('escolas.show', $escola->id) }}"class="d-flex align-items-center">
                                                                        <p  class="font-bold ms-3 mb-0">{{$escola->nome}}</p>
                                                                    </a>
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
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
