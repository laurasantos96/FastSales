<x-layout>

  
    <x-slot name='title'>FastSales - busqueda</x-slot>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center titulo_letra">{{__('Resultados para:')}} {{$q}}</h1>
            </div>
        </div>
        <div class="row mt-2">
            @forelse($ads as $ad)
            <div class="col-12 col-md-4">
                <div class="card mb-5 mi_card">
                 <img src="{{!$ad->images()->get()->isEmpty() ? $ad->images()->first()->getUrl(400,300) : 'https://via.placeholder.com/150'}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"> {{$ad->title}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">€ {{$ad->price}}</h6>
                        <p class="card-text"> {{$ad->body}}</p>
                        <div class="card-subtitle mb-2">
                            <strong><a href="{{route('category.ads',$ad->category)}}">#{{__($ad->category->name)}}</a></strong>
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
                  <a href="{{route('ads.create')}}" class="btn btn-success">{{__('Vende tu primer objeto')}}</a>{{__('o')}} <a href="{{route('home')}}" class="btn btn-primary">{{__('Vuelve a la home')}}</a> 
              </div>
            @endforelse
        </div>
    </div>
       <div class="d-flex justify-content-center">
    {{--  {{$ads->links()}}  --}}
        {{$ads->links()}} 
    </div>
   
</x-layout>