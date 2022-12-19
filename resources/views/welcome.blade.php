<x-layout>
   
        <x-slot name='title'>FastSales- {{$category->name}} ads</x-slot> 
        <div class="container text-center ">
          <h1>Anuncios por Categoría:{{$category->name}}</h1>
        </div>
      <div class="row">
        @forelse ($ads as $ad )

        <div class="container-fluid" style="width: 80%;">
          <img src="..." class="card-img-top" alt="en obra">
          <div class="card-body">
      
            <h5 class="card-title">{{$ad->title}}</h5>
            <h6 class="card-subtitle">{{$ad->price}}</h6>
            <p class="card-text">{{$ad->body}}</p>
            <div class="card-subtitle">
              <a href="{{route('category.ads', $ad->category)}}">#{{$category->name}}</a>

              <i>{{$ad->created_at->format('d/m/Y')}}</i>
            </div>

            <div class="subtitle">
              <small>{{$ad->user->name}}</small>
            </div>

            <a href="#" class="btn btn-primary">Mostrar Más</a>
           
            
          </div>
        </div>
        @empty
        <div class="col-12">
          <h2>Uyy.... parece que no hay nada en esta categoría</h2>
          <a href="{{route('ads.create')}}" class="btn btn-primary">Vuelve a la home</a>
        </div>
          
        @endforelse
        

      </div>
        


        {{-- Carrusel --}}
    
<div class="container">
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
</div>

</x-layout>