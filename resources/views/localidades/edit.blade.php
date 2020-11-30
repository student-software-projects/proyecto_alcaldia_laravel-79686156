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
        <div class="col-md-6 offset-md-3">
            <form action="{{ route('localidad.update',$localidad->id) }}" method="post">
                @csrf
                @method('PUT')
                <table class="table">
                    <tr>
                        <th>LOCALIDAD</th>
                        <td><input type="text" name="localidades" class="form-control" value="{{ $localidad->localidades }}"></td>
                    </tr>


                </table>
                <a href="{{ route('localidad.index') }}" class="btn btn-default">Cancelar</a>
                <button type="submit"class="btn btn-primary">Guardar cambios</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
