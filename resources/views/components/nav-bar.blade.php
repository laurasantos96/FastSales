    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset ('/img/icono.png')}}" style="height: 3.5em">{{ config('app.name', 'FastSales') }}
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link nav_letra" href="{{ route('home') }}">{{ __('Inicio') }}</a>
                    </li>
                  

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button"data-bs-toggle="dropdown"aria-expanded="false" href="{{ route('login') }}">{{ __('Categorías') }}
                     </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            
                            @foreach ($categories as $category )
                            <li><a class="dropdown-item" href="{{route('category.ads',$category)}}">{{__($category->name)}}</a></li>    
                            @endforeach
                        </ul>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Contacto') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('revisor.become') }}">{{ __('Trabaja con nosotros') }}</a>
                    </li>
                    
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                  
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Entrar') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Registrate') }}</a>
                            </li>
                        @endif
                    @else
                    <a role="button" href="{{ route ('ads.create') }}" class="text-decoration-none mt-2">{{__('Crear anuncio')}}</a>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>
                            
                          
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                  <form id="logoutForm" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                                
                                <ul>
                                  @if (Auth::user()->is_revisor)
                                      <li>
                                        <a class="dropdown-item" href="{{route('revisor.home')}} ">
                                            {{__('Revisor')}}
                                            <span class="badge rounded-pill bg-danger">
                                                {{\App\Models\Ad::ToBeRevisionedCount()}}
                                            </span>
                                        </a>
                                      </li>
                                  @endif
                            <li>
                                <a class="dropdown-item" href="#" id="logoutBtn">{{ __('Salir') }}
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

