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
    <nav class="navbar navbar-expand navbar-light ">
      <div class="container-fluid">
        <a href="{{ route('home') }}"><i class="bi bi-chevron-left"></i></a>
        <a class="navbar-brand ms-4" href="{{ route('home') }}">
        Inventário Benavente</a>
        <div class="container-fluid">
          <form class="d-flex" action="{{ route('salas.index') }}" method="GET">
            <input class="form-control me-2" type="tex" name="query" id="query"  type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-primary" type="submit">Search</button>
          </form> 
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
  </div>

  <div class="pt-4"></div>
  <div class="container">
  <div class="page-title">
    <div class="row">
      <div class="col-12 col-md-6 order-md-1 order-last">
        <h3 class="pb-3">Resultados obtidos para "{{ $search_text }}" </h3>
      </div>
    </div>
  </div>
  <div class="float-end">
    <a type="button" class="btn btn-primary" href="{{ route('home') }}">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
      </svg>
      Voltar
    </a>
  </div>
  <div class="clearfix"></div>

  <div class="pt-4"></div>
  
  <div class="col-12 col-md-12">
    <div class="card">
      <div class="card-header">
        <h4>Salas</h4>
      </div>
      <div class="card-content">
      <div class="card-body">
        <div class="table-responsive-lg">
          <table class="table">
            <thead>
              <tr>
                <th>Nome Sala</th>
                <th>Hostname</th>
                <th>Maquina</th>
                <th>Monitor/NrSérie</th>
                <th>Impressora</th>
                <th>Projetor NrSérie</th>
                <th>Estado Projetor</th>
                <th>Obeservações</th>
                <th>Ultima alteração</th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            @foreach ($salas as $sala)
         
            <tbody>
              <tr>
                  
                  <td >{{$sala->nome}} </td>
                  <td>{{$sala->hostname}}</td>
                  <td>{{ $sala->maquina }}</td>
                  <td >{{$sala->monitor}}</td>
                  <td>{{$sala->impressora}}</td>
                  <td>{{$sala->projetor }}</td>
                  <td>{{$sala->estadoprojetor }}</td>
                  <td>{{$sala->observacoes }}</td>
                  <td>{{$sala->updated_at->format('d-m-y')}}</td>
                  <td>
                    <a href="{{ route('salas.edit', $sala->id)}}" type="button" class="btn btn-outline-warning">
                    <i class="bi bi-pencil-square"></i>
                        
                    </a>
                  </td>
                  <td>
                    <form action="{{ route('salas.destroy', $sala->id) }}" style="display: inline" method="POST" onsubmit="return confirm('Tem a certeza que quer eliminar esta sala ?')">
                      @csrf
                      @method('DELETE')
                      <a type="submit" class="btn btn-outline-danger">
                        <i class="bi bi-x-square" ></i>
                      </a>
                    </form>
                  </td>
                </tr>
              </tbody>
              @endforeach
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-12 col-md-12">
    <div class="card">
      <div class="card-header">
          <h4>Bibliotecas</h4>
      </div>
      <div class="card-content">
        <div class="card-body">
          <div class="table-responsive-lg">
            <table class="table">
              <thead>
                <tr>
                  <th>Nome Sala</th>
                  <th>Hostname</th>
                  <th>Maquina</th>
                  <th>Monitor</th>
                  <th>Impressora</th>
                  <th>Obeservações</th>
                  <th>Ultima alteração</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              @foreach ($bibliotecas as $biblioteca)
              <tbody>
                <tr>
                  <td>{{$biblioteca->nomemaquina}} </td>
                  <td>{{$biblioteca->hostname}}</td>
                  <td>{{ $biblioteca->maquina }}</td>
                  <td >{{$biblioteca->monitor}}</td>
                  <td>{{$biblioteca->impressora}}</td>
                  <td>{{ $biblioteca->observacoes }}</td>
                  <td>  {{$biblioteca->updated_at->format('d-m-y')}}</td>
                  <td>
                    <a href="{{ route('biblioteca.edit', $biblioteca->id) }}" type="button" class="btn btn-outline-warning">
                    <i class="bi bi-pencil-square"></i></a>
                  </td>
                  <td>
                    <form action="{{ route('biblioteca.destroy', $biblioteca->id) }}" style="display: inline" method="POST" onsubmit="return confirm('Tem a certeza que quer eliminar esta sala ?')">
                      @csrf
                       @method('DELETE')
                      <button type="submit" class="btn btn-outline-danger">
                        <i class="bi bi-x-square"></i>
                      </button>
                    </form>
                  </td>
                </tr>
              </tbody>
              @endforeach
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="col-12 col-md-12">
    <div class="card">
      <div class="card-content">
            <div class="card-body">
               
                <!-- Table with outer spacing -->
                <div class="table-responsive-lg">
                    <table class="table">
                        <thead>
                            <tr>
                             
                                <th>Nome da Maquina</th>
                                <th>Hostname</th>
                                <th>Maquina</th>
                                <th>Monitor</th>
                                <th>Impressora</th>
                                <th>Projetor</th>
                                <th>Obeservações</th>
                                <th>Ultima alteração</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        @foreach ($outros as $outros)
                       
                        <tbody>
                            <tr>
                                <td>{{$outros->nomeoutros}} </td>
                                <td>{{$outros->hostname}}</td>
                                <td>{{ $outros->maquina }}</td>
                                <td>{{$outros->monitor}}</td>
                                <td>{{$outros->impressora}} </td>
                                <td>{{ $outros->projetor }}</td>
                                <td>{{ $outros->observacoes }}</td>
                                <td>  {{$outros->updated_at->format('d-m-y')}}</td>
                                <td>
                                  <a href="{{ route('outros.edit', $outros->id) }}" type="button" class="btn btn-outline-warning">
                                  <i class="bi bi-pencil-square"></i>
                                 
                                  </a>
                                </td>
  
                                <td>
                                  <form action="{{ route('outros.destroy', $outros->id) }}" style="display: inline" method="POST" onsubmit="return confirm('Tem a certeza que quer eliminar esta sala ?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger">
                                      <i class="bi bi-x-square"></i>
                                    
                                    </button>
                                    
                                    
                                  </form>
                                </td>
                            </tr>
                        </tbody>
                        
                        @endforeach
                    </table>
                </div>
            </div>
         
    </div>
  </div>
  
</div>

@include('partesadmin.footer')
<script src="{{asset('admin/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
  <script src="{{asset('admin/assets/js/bootstrap.bundle.min.js')}}"></script>

  <script src="{{asset('admin/assets/vendors/apexcharts/apexcharts.js')}}"></script>
  <script src="{{asset('admin/assets/js/pages/dashboard.js')}}"></script>

  <script src="{{asset('admin/assets/js/main.js')}}"></script>
  <script src="{{asset('js/app.js')}}"></script>
</body>
</html>