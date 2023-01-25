    <nav class="navbar mi_nav navbar-expand-lg fixed-top">
        <div class="container">
          
            <a class="navbar-brand nav_letra fs-4" href="{{ url('/') }}">
             <img src="{{ asset ('/img/icono.png')}}" style="height: 2em">{{'FastSales'}}
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle nav_letra" href="#" role="button"data-bs-toggle="dropdown"aria-expanded="false" href="{{ route('login') }}">{{ __('Categorías') }}
                     </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            
                            @foreach ($categories as $category )
                            <li><a class="dropdown-item nav_letra" href="{{route('category.ads',$category)}}">{{__($category->name)}}</a></li>    
                            @endforeach
                        </ul>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link nav_letra" href="{{ route('contact') }}">{{ __('Contacto') }}</a>
                    </li>
                    <li class="nav-item">

                        <a class="nav-link nav_letra" href="{{ route('revisor.become') }}">{{ __('Trabaja con nosotros') }}</a>
            
                    </li>
                  
                    <li>
                        
                        <form action="{{route('search')}}" method="GET" role="search">
                           <div class="input_group">
                            
                                <input type="search" name="q" placeholder="{{__('Buscar...')}}" class="mi_search">
                                    <i class="bi btn_search bi-search">    
                                    </i>
                         </div>   
                        </form>
                     
                    </li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    
                    
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link nav_letra" href="{{ route('login') }}">{{ __('Entrar') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link nav_letra" href="{{ route('register') }}">{{ __('Registrate') }}</a>
                            </li>
                        @endif
                    @else
                    <a href="{{ route ('ads.create') }}" class="text-decoration-none mt-2 nav_letra text-success fs-5">{{__('Crear anuncio')}}</a>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle nav_letra" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                                {{-- 😊 --}}
                            </a>
                            
                          
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                  <form id="logoutForm" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                                
                                <ul class="list-unstyled">
                                  @if (Auth::user()->is_revisor)
                                      <li>
                                        <a class="dropdown-item nav_letra" href="{{route('revisor.home')}} ">
                                            {{__('Revisor')}}
                                            <span class="badge rounded-pill bg-danger">
                                                {{\App\Models\Ad::ToBeRevisionedCount()}}
                                            </span>
                                        </a>
                                      </li>
                                  @endif
                            <li>
                                <a class="dropdown-item nav_letra" href="{{ route('panel.index') }}">{{ __('Mi perfil') }}</a>
                            </li>     
                            <li>
                                <a class="dropdown-item nav_letra" href="#" id="logoutBtn">{{ __('Salir') }}
                                </a>
                            </li>   
                            </div>
                          
                        </li>
                    </ul>
                    @endguest
                  
                        <a class="nav-link me-2" href="">
                            <x-locale lang="es" country="es"></x-locale>
                        </a>
               
                        <a class="nav-link me-2" href="">
                            <x-locale lang="us" country="us"></x-locale>
                        </a>
                  
                        <a class="nav-link" href="">
                            <x-locale lang="it" country="it"></x-locale>
                        </a>  
                               
                </ul>
            </div>
        </div>
    </nav>

