<x-layout>

  
  <x-slot name='title'>FastSales - {{__('Mis anuncios')}}</x-slot>
  <div class="container mt-2">
      <div class="row">
          <div class="col-12">
              <h1 class="text-center titulo_letra">{{__('Mis anuncios:')}}</h1>
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
                           <a href="{{route('category.ads',$ad->category)}}" class="text-decoration-none nav_letra">#{{__($ad->category->name)}}</a> 
                          <i>{{$ad->created_at->format('d/m/Y')}}</i>
                      </div>
                    {{--   dashboard  --}}
                    <div class="d-flex justify-content-center mt-4">
                       <form method="POST" action="{{route("ad.destroy",$ad->id)}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-decoration-none nav_letra borrar_boton me-3">{{__('Borrar')}}</button>
                      </form>
                        <a href="{{route ('ad.edit',$ad)}} " class="text-decoration-none nav_letra mi_boton">{{__('Modificar')}}</a>
                     
                     </div> 
                  </div>
              </div>
          </div>
          @empty
          <div class="col-12">
                <h2>{{__('Uyy.. parece que no hay nada')}}</h2>
            </div>
          @endforelse
      </div>
  </div>
  <div class="d-flex justify-content-center">
      {{-- {{$ads->links()}}  --}}
  </div>
 
</x-layout>