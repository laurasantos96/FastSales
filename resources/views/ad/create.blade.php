<x-layout>
  <x-slot name='title'>{{('FastSales')}}</x-slot>
  <div class="container-fluid" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">

      <h5 class="card-title">{{('Nuevo anuncio')}}</h5>
      <div class="">
        <livewire:create-ad />
      </div>
    </div>
  </div>
</x-layout>