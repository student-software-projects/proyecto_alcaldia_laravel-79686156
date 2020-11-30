<!doctype html>
<html lang="en">
<body background="https://fondosmil.com/fondo/31645.jpg">
</body>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{route("jugador.create")}}"class="btn btn-primary mt-5 mb-3">CREAR NUEVO JUGADOR </a>
            <a href="{{route("landing.index")}}"class="btn btn-primary mt-5 mb-3">VOLVER A LA PAGINA PRINCIPAL </a>


            <div class="table-responsive">
                <table class="table table-dark table-striped">
                    <thead>
                    <tr>
                        <th><center>NOMBRES</center></th>
                        <th><center>APELLIDOS</center></th>
                        <th><center>NUMERO DE CAMISA</center></th>
                        <th><center>APODO</center></th>
                        <th><center>FECHA DE CREACION</center></th>
                        <th><center>OPCIONES</center></th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($Jugadores as $jugador)
                        <tr>
                            <td><center>{{ $jugador->nombres }}<center></td>
                            <td><center>{{ $jugador->apellidos }}<center></td>
                            <td><center>{{ $jugador->numero_camisa }}</center></td>
                            <td><center>{{ $jugador->apodo }}</center></td>

                            <td><center>{{ $jugador->created_at }}</center></td>
                            <td class="text-center">
                                <form action="{{route('jugador.destroy',$jugador->id)}}"method="post">
                                    @csrf
                                    @method('DELETE')





                                    <a href="{{route('jugador.edit',$jugador->id)}}"class="btn btn-warning">EDITAR</a>
                                    <button type="submit" href=""class="btn btn-danger">ELIMINAR</button>

                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>

