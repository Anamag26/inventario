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
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
               
            </ul>

            <div class="dropdown">

                <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="user-menu d-flex">
                        <div class="user-name text-end me-3">
                            <h6 class="mb-0 text-gray-600" >{{ Auth::user()->name }}           <i class="bi bi-caret-down-fill"></i></h6>
                            <p class="mb-0 text-sm text-gray-600"></p>
                        </div>
                        <div class="user-img d-flex align-items-center">
                           
                        </div>
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
<div class="pt-4"></div>
<div class="page-title">
  <div class="row">
      <div class="col-12 col-md-6 order-md-1 order-last">
        <h3 class="pb-3">Professores e outros</h3>
        <p class="text-subtitle text-muted"> Legenda </p>
      </div>
      
  </div>
  <section class="section">
    <div class="card">
        <div class="card-body">
          P- Professores
          <br>
           PSI-Psicologos
           <br>
           C- Coordenadores
        </div>
    </div>
</section>
</div>

  @if (\Session::has('success'))
    <div class="alert alert-success">
      <li>{!! \Session::get('success') !!}</li>
    </div>
    @endif
  </>
  
    <div class="container-fluid">
      <div class="pt-4"></div>
      <div class="float-start">
        
        <div class="float-start">
          <a href="{{ route('biblioteca.show', $escola->id) }}" type="button" class="btn btn-outline-secondary">
          Biblioteca
        </a>
    </div>
      
    </div>

    <div class="float-end">
      <button type="button" class="btn btn-outline-secondary block" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
          <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
          <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"></path>
        </svg>
        Criar Sala
      </button>
      <a type="button" class="btn btn-primary" onclick="history.go(-1);">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
        </svg>
        Voltar
      </a>
    </div>
  

  <div class="clearfix">

  </div>

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
          <form action="{{ route('outros.store') }}" method="POST">
            @csrf
            <form class="row g-3">
              <div class="col-md-6">
              <label for="nomeoutros" class="form-label">Nome da maquina</label>
              <input type="text" class="form-control" id="nomeoutros" name="nomeoutros"  data-msg="porfavor insira uma sala valida">
              @error('nomeoutros')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <p></p>
            
            <div class="col-md-6">
              <label for="hostname" class="form-label">Hostname</label>
              <input type="text" class="form-control" id="hostname" name="hostname">
            </div>
            <p></p>
            <div class="col-md-6">
              <label for="maquina" class="form-label">Maquina </label>
              <input type="text" class="form-control" id="maquina" name="maquina">
            </div>
            <p></p>
            <div class="col-md-6">
              <label for="monitor" class="form-label">Monitor/nr Série</label>
              <input type="text" class="form-control" id="monitor" name="monitor">
            </div>
            <p></p>
           <div class="col-12">
              <label for="impressora" class="form-label">Impressora</label>
              <input type="text" class="form-control" id="impressora" name="impressora" placeholder="">
            </div>
            <p></p>
            <div class="col-12">
              <label for="projetor" class="form-label">Projetor</label>
              <input type="text" class="form-control" id="projetor" name="projetor" placeholder="">
            </div>
            <p></p>
            <div class="col-12">
              <label for="observacoes" class="form-label">Observações</label>
              <input type="text" class="form-control" id="observacoes" name="observacoes" placeholder="">
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
<div class="pt-4"></div>
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
                              <th>Obeservações</th>
                              <th>Ultima alteração</th>
                              <th></th>
                              <th></th>
                          </tr>
                      </thead>
                      @foreach ($outros as $outros)
                      @if ($outros->id_escola==$escola->id)
                      <tbody>
                          <tr>
                              <td>{{$outros->nomeoutros}} </td>
                              <td>{{$outros->hostname}}</td>
                              <td>{{$outros->maquina }}</td>
                              <td>{{$outros->monitor}}</td>
                              <td>{{$outros->impressora}} </td>
                              <td>{{$outros->observacoes }}</td>
                              <td>{{$outros->updated_at->format('d-m-y')}}</td>
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
                      @endif
                      @endforeach
                  </table>
              </div>
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