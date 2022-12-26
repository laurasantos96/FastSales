<x-layout>
  <div class="row justify-content-center w-100">
    <div class="col-md-8">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{asset('img/carruselmoviles.jpg')}}" class="d-block" alt="...">
        </div>
        <div class="carousel-item">
          <img src="{{asset('img/carruseldeporte.jpg')}}" class="d-block" alt="...">
        </div>
        <div class="carousel-item">
          <img src="{{asset('img/carruselcoche.jpg')}}" class="d-block" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <div class="col-12 col-md-6">
      <div><b>{{__('Titulo:')}}</b>{{$ad->title}}</div>
      <div><b>{{__('Precio:')}}</b>{{$ad->price}}</div>
      <div><b>{{__('Descripcion:')}}</b>{{$ad->body}}</div>
      <div><b>{{__('Publicado el:')}}</b>{{$ad->created_at->format('d/m/Y')}}</div>
      <div><b>{{__('Por:')}}</b>{{$ad->user->name}}</div>
      <div><a href="{{route('category.ads',$ad->category)}} ">#{{$ad->category->name}}</a></div>
      <div><a href="#" class="btn btn-success">{{__('Comprar')}}</a></div>
    </div>
  </div>
</div>
</x-layout>