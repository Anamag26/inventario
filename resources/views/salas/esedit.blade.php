<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - Mazer Admin Dashboard</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('admin/assets/css/bootstrap.css')}}">

  <link rel="stylesheet" href="{{asset('admin/assets/vendors/iconly/bold.css')}}">

  <link rel="stylesheet" href="{{asset('admin/assets/vendors/perfect-scrollbar/perfect-scrollbar.css')}}">
  <link rel="stylesheet" href="{{asset('admin/assets/vendors/bootstrap-icons/bootstrap-icons.css')}}">
  <link rel="stylesheet" href="{{asset('admin/assets/css/app.css')}}">
  <link rel="shortcut icon" href="{{asset('admin/assets/images/favicon.svg')}}" type="image/x-icon">
</head>

<body>
  <div class="container">
    <nav class="navbar navbar-expand navbar-light">
      <div class="container-fluid">
        <a href="{{ route('home') }}"><i class="bi bi-chevron-left"></i></a>
        <a class="navbar-brand ms-4" href="{{ route('home') }}">
        Inventário Benavente
      </a>
      <div class="container-fluid">
        <form class="d-flex" action="{{ route('salas.index') }}" method="GET">
          <input class="form-control me-2" type="tex" name="query" id="query"  type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-primary" type="submit">Search</button>
        </form>
      </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0"></ul>
        <div class="dropdown">
          <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
            <div class="user-menu d-flex">
              <div class="user-name text-end me-3">
                <h6 class="mb-0 text-gray-600" >{{ Auth::user()->name }}           <i class="bi bi-caret-down-fill"></i></h6>
                <p class="mb-0 text-sm text-gray-600"></p>
              </div>
              <div class="user-img d-flex align-items-center"></div>
            </div>
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
            <li>
              <h6 class="dropdown-header">Hello, {{ Auth::user()->name }}!</h6>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <a class="dropdown-item" href="#" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();" ><i class="icon-mid bi bi-box-arrow-left me-2"  ></i> Logout
              </a>
            </li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>
          </ul>
        </div>
      </div>
    </div>
</nav>
<div class="page-heading">
  <div class="page-title">
    <div class="row">
      <div class="col-12 col-md-6 order-md-1 order-last">
        <h3 class="pb-3">{{$escola->nome}}</h3>
        <p class="text-subtitle text-muted">Editar informaçãoes adicionais da escola {{$escola->nome}} </p>
      </div>
    </div>
  </div>
  <section class="section">
    <div class="card">
      <div class="card-body">
        <form action="{{ route('escolas.update', $escola->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card">
               <div class="card-content">
                    <div class="card-body">
                        <form class="form">
                            <div class="row">
                                <div class="col-md-6">
                
                                    <input type="text" class="form-control" name="nome" id="nome" value="{{ $escola->nome }}">
                                    
                                  </div>
                                <br>
                                <div class="col-md-6">
                
                                    <input type="text" class="form-control" name="localizacao"  id="localizacao" value="{{ $escola->localizacao }}">
                                   
                                  </div>
                                <br>
                                <div class="col-md-8 col-12">
                                    <div class="form-group">
                                        <label for="impressora">impressora</label>
                                        <input type="text" id="impressora" class="form-control" value="{{ $escola->impressora }}" name="impressora">
                                    </div>
                                </div>
                                <br>
                                <div class="col-md-8 col-12">
                                    <div class="form-group">
                                        <label for="senhas">senhas</label>
                                        <input type="text" id="senhas" class="form-control" value="{{ $escola->senhas }}" name="senhas">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="ip">ip</label>
                                        <input type="text" id="ip" class="form-control"  value="{{ $escola->ip }}" name="ip">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="ups">ups</label>
                                        <input type="text" id="ups" class="form-control" name="ups"  value="{{ $escola->ups }}">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                  <div class="form-group">
                                      <label for="contacto">contacto</label>
                                      <input type="text" id="contacto" class="form-control" name="contacto"  value="{{ $escola->contacto}}">
                                  </div>
                              </div>
                              <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="outro">outro</label>
                                    <input type="text" id="outro" class="form-control" name="outro"  value="{{ $escola->outro}}">
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
    </div>
  </section>
</div>
@if (\Session::has('success'))
<div class="alert alert-success">
  <li>{!! \Session::get('success') !!}</li>
</div>
@endif

  @include('partesadmin.footer')
  
  <script src="{{asset('admin/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
  <script src="{{asset('admin/assets/js/bootstrap.bundle.min.js')}}"></script>

  <script src="{{asset('admin/assets/vendors/apexcharts/apexcharts.js')}}"></script>
  <script src="{{asset('admin/assets/js/pages/dashboard.js')}}"></script>

  <script src="{{asset('admin/assets/js/main.js')}}"></script>
  <script src="{{asset('js/app.js')}}"></script>
</body>
</html>