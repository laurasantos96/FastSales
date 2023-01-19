<x-layout>
  <div>
      <div>
        <h1 class="text-center titulo_letra pt-5 mt-5">{{__('Contacta con nosotros')}}</h1>
      </div>
      <div class="d-flex align-items-center justify-content-around pt-5 mt-5">
          <a href="https://github.com/geannyna?tab=repositories" class="contact_a"><img src="{{ asset ('/img/github1.png')}}" class="mi_icono1 me-5"></a>
          <a href="https://web.whatsapp.com/" class="contact_a"><img src="{{ asset ('/img/whatsapp1.png')}}" class="mi_icono1 me-5"></a>
          <a href="https://discord.com/channels/846683685565497344/994234179598422047" class="contact_a"> <img src="{{ asset ('/img/discord1.png')}}" class="mi_icono1 me-5"></a>
          <a href="https://www.linkedin.com/in/clau-dia/" class="contact_a"> <img src="{{ asset ('/img/linkedin1.png')}}" class="mi_icono1 me-5"></a>
          {{-- <i class="bi bi-whatsapp me-3"></i>
          <i class="bi bi-discord me-3"></i>
          <i class="bi bi-linkedin"></i> --}}
      </div>
</div>
</x-layout>