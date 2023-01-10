<x-layout>

  
    <x-slot name='title'>{{__('FastSales')}}</x-slot>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center titulo_letra">{{__('Bienvenido a FastSales')}}</h1>
            </div>
        </div>
        <div class="row">
            @forelse($ads as $ad)
            <div class="col-12 col-lg-4">
                <div class="card mb-2 mi_card" style="width: 80%;">
                  @if ($ad->images()->count() > 0)
                     <img src="{{$ad->images()->first()->getUrl(400,300)}}" class="card-img-top mi_img" alt="...">
                  @else
                  <img src="https://via.placeholder.com/150" class="card-img-top" alt="...">
                  @endif
                   
                    <div class="card-body">
                        <h5 class="card-title"> {{($ad->title)}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">€ {{$ad->price}}</h6>
                        <p class="card-text"> {{$ad->body}}</p>
                        <div class="card-subtitle mb-2">
                            <strong><a href="{{route('category.ads',$ad->category)}}">#{{$ad->category->name}}</a></strong>
                            <i>{{$ad->created_at->format('d/m/Y')}}</i>
                        </div>
                        <div class="card-subtitle mb-2">
                            <small>{{ $ad->user->name }}</small>
                        </div> 
                        <a href="{{route("ads.show",$ad)}}" class="text-decoration-none mi_letra mi_boton">{{__('Mostrar Más')}}</a>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12">
                  <h2>{{__('Uyy.. parece que no hay nada')}}</h2>
                  <a href="{{route('ads.create')}}" class="btn btn-success">{{__('Vende tu primer objeto')}}</a> {{__('o')}} <a href="{{route('home')}}" class="mi_boton">{{__('Vuelve a la home')}}</a> 
              </div>
            @endforelse
        </div>
    </div>
  
        


        {{-- Carrusel --}}
    
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('¡Bienvenido a nuestro portal de compra-venta rápida!') }}</div>

                <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
                      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 5"></button>
                      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="5" aria-label="Slide 6"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active" data-bs-interval="10000">
                        <img src="{{ asset ('/img/carruselcoche.jpg')}}" class="d-block w-100">
                      </div>

                      <div class="carousel-item" data-bs-interval="2000">
                        <img src="{{ asset ('/img/carruselropa.jpg')}}" class="d-block w-100">
                      </div>

                      <div class="carousel-item">
                        <img src="{{ asset ('/img/carruselmoviles.jpg')}}" class="d-block w-100"> 
                      </div>
            
                      <div class="carousel-item">
                        <img src="{{ asset ('/img/carruseldeporte.jpg')}}" class="d-block w-100">
                        
                      </div>
                      <div class="carousel-item">
                        <img src="{{ asset ('/img/carruselguitarra.jpg')}}" class="d-block w-100">    
                      </div>
        
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div>
        </div>
    </div>
</div> --}}

</x-layout>