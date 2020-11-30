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
        <div class="col-md-4 mt-5">
            <form action="{{route('equipo.store')}}"method="POST">
                @csrf
                <div class="form-group">
                    <label for="">NOMBRE DEL EQUIPO:</label>
                    <input type="text" name="nombre_equipo" id="nombre_equipo" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">LOGO:</label>
                    <input type="text" name="logo" id="logo" class="form-control">
                </div>

                <hr>
                <button class="btn btn-primary" type="submit">GUARDAR EQUIPO</button>

                <a href="{{route('equipo.index')}}" class="btn btn primary">CANCELAR</a>
            </form>

        </div>
    </div>
</div>


</body>
</html>

