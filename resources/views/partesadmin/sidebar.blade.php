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
                        <span>Inventario Benavente</span>
                    </a>
                </li>
                 <li class="sidebar-title">Escolas</li>
                {{-- <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-stack"></i>
                        <span>Benavente</span>
                    </a>
                     
                    
                    <ul class="submenu ">
                        
                        <li class="submenu-item ">
                            @forelse ($escolas as $escola)
                            @if ($escola->localizacao=='Benavente')
                            <a href="{{ route('escolas.index', $escola->id) }}">{{$escola->nome}}</a>  
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
                            <a href="{{ route('escolas.index', $escola->id) }}">{{$escola->nome}}</a>  
                            @endif
                            @empty
                            ainda sem escolas
                            @endforelse
                        </li>
                      
                    </ul>
                    
                    
                </li>  --}}


            </ul>
            
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>



