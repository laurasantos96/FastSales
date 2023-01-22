<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
    <div>
    <h1>Alguien quiere trabajar con nosotros</h1>
    <h2>Sus Datos</h2>
    <p><b>Nombre:</b>{{$user->name}} </p>
    <p><b>Email:</b>{{$user->email}} </p>
    <p>Si quieres aceptarle en nuestro equipo pulsa aquí</p>
    <a href="{{route('revisor.make',$user)}} ">Aceptar solicitud</a>
  </div>
</body>
</html>



