<x-layout>

  <x-slot name='title'>{{('FastSales')}}</x-slot>
  
  <div class="container-fluid mt-5" style="width: 80%;">
    <div class="card-body">

    <h4 class="card-title titulo_letra text-center">{{__('Contacta con nosotros')}}</h4>
    <form action="" method="post">
        @csrf   {{--  componente de seguridad cuando tenemos post, hay que ponerlo siempre para el post --}}
      <div class="mb-3">
        <label for="name" class="form-label mi_letra">Tu nombre</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Introduce tu nombre" required>
        
      </div>
      <div class="mb-3">
        <label for="email" class="form-label mi_letra">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required> 
      </div>
      <div class="mb-3">
        <label for="subject" class="form-label mi_letra">Asunto</label>
        <input type="text" class="form-control" id="subject" name="subject" placeholder=" Qué nos quieres sugerir ?" required> 
      </div>
      <div class="mb-3">
        <label for="body" class="form-label mi_letra">Comentarios</label>
        <textarea class="form-control" id="body" name="body" rows="3" required></textarea>
      </div>
      <div class="d-flex justify-content-center">
        <button type="submit" class="mi_boton mb-3">{{__('Enviar')}}</button>
    </div> 
    </form>
  </div>
</div>
</x-layout>