<x-layout>

  
    <x-slot name='title'>{{__('FastSales')}}</x-slot>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center titulo_letra">{{__('Bienvenido a FastSales')}}</h1>
            </div>
        </div>
        <div class="row">
            @forelse($ads as $ad)
            <div class="col-12 col-lg-4 d-flex justify-content-center">
                <div class="card mi_card" style="width: 18rem;">
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
                        <a href="{{route("ads.show",$ad)}}" class="text-decoration-none nav_letra mi_boton">{{__('Mostrar Más')}}</a>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12">
                  <h2>{{__('Uyy.. parece que no hay nada')}}</h2>
                  <a href="{{route('ads.create')}}" class="btn btn-success me-3">{{__('Vende tu primer objeto')}}</a> {{__('o')}} <a href="{{route('home')}}" class="mi_boton">{{__('Vuelve a la home')}}</a> 
              </div>
            @endforelse
        </div>
    </div>


</x-layout>