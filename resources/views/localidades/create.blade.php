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
        <div class="col-md-4 mt-5">
            <form action="{{route('localidad.store')}}"method="POST">
                @csrf
                <div class="form-group">
                    <label for="">LOCALIDAD:</label>
                    <input type="text" name="localidades" id="localidades" class="form-control">
                </div>
                <hr>
                <button class="btn btn-primary" type="submit">GUARDAR LOCALIDAD</button>
                <a href="{{route('localidad.index')}}" class="btn btn primary">CANCELAR</a>
            </form>

        </div>
    </div>
</div>


</body>
</html>
