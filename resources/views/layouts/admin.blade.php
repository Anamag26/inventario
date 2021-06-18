
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="/home" alt="Logo" srcset="">Inventario Benavente</a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
        
                <div class="sidebar-menu">
                
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>
        
                        <li class="sidebar-item active ">
                            <a href="/home" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Escolas</span>
                            </a>
                        </li>
                        <P></P>
                       
                      
                        
                          {{-- <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Benavente</span>
                            </a>
                             
                            
                            <ul class="submenu ">
                                
                                <li class="submenu-item ">
                                    @forelse ($escolas as $escola)
                                    @if ($escola->localizacao=='Benavente')
                                    <a href="{{ route('salas.show', $escola->id) }}">{{$escola->nome}}</a>  
                                    @endif
                                    @empty
                                    ainda sem escolas
                                    @endforelse
                                </li>
                              
                            </ul>
                            
                            
                       </li>
        
                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Samora Correia</span>
                            </a>
                            
                            
                            <ul class="submenu ">
                                
                                <li class="submenu-item ">
                                    @forelse ($escolas as $escola)
                                    @if ($escola->localizacao=='Samora Correia')
                                    <a href="{{ route('salas.show', $escola->id) }}">{{$escola->nome}}</a>  
                                    @endif
                                    @empty
                                    ainda sem escolas
                                    @endforelse
                                </li>
                              
                            </ul>
                            
                            
                        </li>  --}}
        
        
                    </ul>
                    
                </div>
              
            </div>
        </div>
        <header class='mb-3'>
            
            <nav class="navbar navbar-expand navbar-light ">
                <div class="container-fluid">
            

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
                                <li><a class="dropdown-item" href="#" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();" ><i class="icon-mid bi bi-box-arrow-left me-2"  ></i> Logout</a></li>
                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>  
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
      
        @yield('content')
        @include('partesadmin.footer')
    </div>
    <script src="{{asset('admin/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{asset('admin/assets/vendors/apexcharts/apexcharts.js')}}"></script>
    <script src="{{asset('admin/assets/js/pages/dashboard.js')}}"></script>

    <script src="{{asset('admin/assets/js/main.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>

<script>
  
  $('#edit').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      var nome = button.data('nome') 
      var maquina = button.data('maquina')
      var impressora = button.data('impressora') 
      var projetor = button.data('projetor') 
      var id = button.data('id') 
      var modal = $(this)
      modal.find('.modal-body #nome').val(nome);
      modal.find('.modal-body #maquina').val(maquina);
      modal.find('.modal-body #impressora').val(impressora);
      modal.find('.modal-body #projetor').val(projetor);
      modal.find('.modal-body #id').val(id);
    })

</script>
</body>

</html>