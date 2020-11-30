<!doctype html>
<html lang="en">
<body background="https://images3.alphacoders.com/215/thumb-1920-215979.jpg">
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

                <th>NOMBRE DEL EQUIPO</th>
                <td>{{$equipo->nombre_equipo}}</td>
            </tr>
            <tr>
                <th>LOGO</th>
                <td>{{$equipo->logo}}</td>
            </tr>
            <tr>


        </table>
        <a href="{{route('equipo.index')}}"class="btn btn-default">VOLVER</a>
        <a href="{{route('equipo.edit',$equipo->id)}}"class="btn btn-warning">EDITAR</a>
    </div>
</div>
</body>
</html>

