<!doctype html>
<html lang="en">
<body background="https://wallpapercave.com/wp/wp2092975.jpg">
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
        <div class="col-md-8">
            <a href="{{route("localidad.create")}}"class="btn btn-primary mt-5 mb-3">CREAR NUEVA LOCALIDAD</a>
            <a href="{{route("landing.index")}}"class="btn btn-primary mt-5 mb-3">VOLVER A LA PAGINA PRINCIPAL </a>
            <div class="table-responsive">
                <table class="table table-dark table-striped">
                    <thead>
                    <tr>
                        <th>LOCALIDAD</th>
                        <th>FECHA DE CREACION</th>
                        <th><center>OPCIONES</center></th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($Localidades as $localidad)
                        <tr>
                            <td>{{ $localidad->localidades }}</td>
                            <td>{{ $localidad->created_at }}</td>
                            <td class="text-center" class="text-center">
                                <form action="{{route('localidad.destroy',$localidad->id)}}"method="post">
                                    @csrf
                                    @method('DELETE')



                                    <a href="{{route('localidad.edit',$localidad->id)}}"class="btn btn-warning">EDITAR</a>
                                    <button type="submit" href=""class="btn btn-danger">ELIMINAR</button>
                                </form>
                            </>
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
