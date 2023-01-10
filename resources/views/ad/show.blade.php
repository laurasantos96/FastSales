<x-layout>
  <div class="row">
    <div class="d-flex justify-content-center">
    <div id="adImage" class="carousel slide carousel-fade mi_carousel" data-bs-ride="carousel">
      <div class="carousel-indicators">
        @for ($i = 0; $i < $ad->images()->count(); $i++)
        <button type="button boton_carousel" data-bs-target="#adImage" data-bs-slide-to="{{$i}}" class="@if ($i==0) active @endif" aria-current="true" aria-label="Slide {{$i + 1}}"></button>
        @endfor
      </div>
      <div class="carousel-inner">
        @foreach ($ad->images as $image)
           <div class="carousel-item @if ($loop->first) active @endif">
          <img src="{{$image->getUrl(400,300)}}" class="d-block w-100 mi_img" alt="...">
        </div>
        @endforeach
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#adImage" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#adImage" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  <div class="row d-flex justify-content-center mt-5">
    <div class="col-12 col-md-6">
      <div><b>{{__('Titulo: ')}}</b>{{$ad->title}}</div>
      <div><b>{{__('Precio: ')}}</b>{{$ad->price}}</div>
      <div><b>{{__('Descripcion: ')}}</b>{{$ad->body}}</div>
      <div><b>{{__('Publicado el: ')}}</b>{{$ad->created_at->format('d/m/Y')}}</div>
      <div><b>{{__('Por: ')}}</b>{{$ad->user->name}}</div>
      <div class="mb-3"><a href="{{route('category.ads',$ad->category)}} ">#{{__($ad->category->name)}}</a></div>
      <div><a href="#" class="mi_boton text-decoration-none mi_letra">{{__('Comprar')}}</a></div>
    </div>
  </div>
</div>
</x-layout>