<x-layout>
  <div>
    <h1>Alguien quiere trabajar con nosotros</h1>
    <h2>Sus Datos</h2>
    <p><b>Nombre:</b>{{$user->name}} </p>
    <p><b>Email:</b>{{$user->email}} </p>
    <p>Si quieres ser parte de nuestro equipo pulsa aquí</p>
    <a href="{{route('revisor.make',$user)}} ">Acceptar solicitud</a>
  </div>
</x-layout>