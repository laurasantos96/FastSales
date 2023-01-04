<x-layout>
  <x-slot name='title'>{{('FastSales')}}</x-slot>
  <div class="container-fluid" style="width: 80%;">
    
    <div class="card-body">

      <h5 class="card-title">{{__('Nuevo anuncio')}}</h5>
      <div class="">
        <livewire:create-ad/>
      </div>
    </div>
  </div>
</x-layout>