<x-layout>
  <x-slot name='title' class="mt-5 pt-5">FastSales - {{__('Revisor')}} Home</x-slot>

@if ($ad)

<div class="container-fluid">
 <div class="row">
  <div class="col-12 col-md-8 offset-md-2">
  <div class="card-header">
    {{__('Anuncio')}} # {{$ad->id}}
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-md-3">
        <b>{{__('Imágenes')}}</b>
      </div>
      <div class="col-9">
        <div class="row">
          @forelse ($ad->images as $image )
          <div class="row mb-2">
              <div class="col-md-4">
                <img src="{{$image->getUrl(400,300)}}" class="img-fluid" alt="...">
              </div>
              <div class="col-md-8">
                Adult : <i class="bi bi-circle-fill {{$image->adult}}"></i>[{{$image->adult}}] <br>
                Spoof : <i class="bi bi-circle-fill {{$image->spoof}}"></i>[{{$image->spoof}}] <br>
                Medical : <i class="bi bi-circle-fill {{$image->medical}}"></i>[{{$image->medical}}] <br>
                Violence : <i class="bi bi-circle-fill {{$image->violence}}"></i>[{{$image->violence}}] <br>
                Racy : <i class="bi bi-circle-fill {{$image->racy}}"></i>[{{$image->racy}}] <br>
                <br>
                <b>{{__('Labels')}}</b><br>
                @forelse ($image->getLabels() as $label)
                  <a href="#" class="btn btn-info btn-sm m-1">{{__($label)}}</a>
                @empty
                  No labels
                @endforelse
                  
                <br>
                id : {{$image->id}} <br>
                path : {{$image->path}} <br>
                url : {{Storage:: url($image->path)}} <br>
              </div>
          </div>
          @empty
            <div class="col-12">
              <b>{{__('No hay imágenes')}}</b>
            </div>
          @endforelse
        </div>
      </div>
      <hr>
    </div>
    <div class="row">
      <div class="col-md-6">
        <b> {{__('Usuario')}} </b>
      
        # {{$ad->user->id}} - {{$ad->user->name}} - {{$ad->user->email}}
      </div>
    </div>
  </div>
<hr>
  <div class="row">
    <div class="col-md-3">
      <b> {{__('Titulo:')}}  </b>
    </div>
    <div class="col-md-9">
       {{ $ad->title }}
    </div>
  </div>
  <hr>
  <div class="row">
      <div class="col-md-3">
          <b> {{__('Precio:')}} </b>
      </div>
      <div class="col-md-9">
         {{$ad->price}}
      </div>
  </div>
  <hr>
  <div class="row">
      <div class="col-md-3">
          <b> {{__('Descripcion:')}} </b>
      </div>
      <div class="col-md-9">
           {{$ad->body}}
      </div>
  </div>
  <hr>
  <div class="row">
      <div class="col-md-3">
          <b>{{__('Categoria:')}}</b>
      </div>
      <div class="col-md-9">
          {{$ad->category->name}}
      </div>
  </div>
  <hr>
  <div class="row">
      <div class="col-md-3">
          <b>{{__('Fecha de creación')}}</b>
      </div>
      <div class="col-md-9">
          {{$ad->created_at}}
      </div>
  </div>
</div>
</div>
<div class="row mt-5 d-flex justify-content-center">
<div class="col-2">
  <form action="{{route('revisor.ad.reject',$ad)}}" method="POST">
      @csrf
      @method('PATCH')
      <button type="submit" class="borrar_boton">{{__('Rechazar')}}</button>
  </form>
</div>
<div class="col-2">
   <form action="{{route('revisor.ad.accept',$ad)}}" method="POST">
      @csrf
      @method('PATCH')
      <button type="submit" class="mi_boton">{{__('Aceptar')}}       
  </button>
  </form>
  
</div>
</div>


</div>
</div>
</div>
@else
<div class="d-flex justify-content-center">
  <h3 class="titulo_letra mt-5 w-75">{{__('Ya no hay anuncios para revisar,gracias.')}}</h3>
</div>
@endif
</x-layout>