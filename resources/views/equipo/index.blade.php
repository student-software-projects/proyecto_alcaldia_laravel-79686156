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
        <div class="col-md-12">
            <a href="{{route("equipo.create")}}"class="btn btn-primary mt-5 mb-3">CREAR NUEVO EQUIPO </a>
            <a href="{{route("landing.index")}}"class="btn btn-primary mt-5 mb-3">VOLVER A LA PAGINA PRINCIPAL </a>
            <div class="table-responsive">
                <table class="table table-dark table-striped">
                    <thead>
                    <tr>
                        <th><center>NOMBRE EQUIPO</center></th>
                        <th><center>LOGO</center></th>
                        <th><center>FECHA DE CREACION</center></th>
                        <th><center>OPCIONES</center></th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($Equipos as $equipo)
                        <tr>
                            <td><center>{{ $equipo->nombre_equipo}}</center></td>
                            <td><center>{{ $equipo->logo }}</center></td>
                            <td><center>{{ $equipo->created_at }}</center></td>
                            <td class="text-center">
                                <form action="{{route('equipo.destroy',$equipo->id)}}"method="post">
                                    @csrf
                                    @method('DELETE')



                                    <a href="{{route('equipo.edit',$equipo->id)}}"class="btn btn-warning">EDITAR</a>
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
