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
        <div class="col-md-6 offset-md-3"></div>
        <table class="table">
            <tr>

                <th>NOMBRES</th>
                <td>{{$jugador->nombres}}</td>
            </tr>
            <tr>
                <th>APELLIDOS</th>
                <td>{{$jugador->apellidos}}</td>
            </tr>
            <tr>

                <th>NUMERO DE CAMISA</th>
                <td>{{$jugador->numero_camisa}}</td>
            </tr>

        </table>
        <a href="{{route('jugador.index')}}"class="btn btn-default">VOLVER</a>
        <a href="{{route('jugador.edit',$jugador->id)}}"class="btn btn-warning">EDITAR</a>
    </div>
</div>
</body>
</html>
