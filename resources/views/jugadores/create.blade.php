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
        <div class="col-md-4 mt-5">
            <form action="{{route('jugador.store')}}"method="POST">
                @csrf
                <div class="form-group">
                    <label style="" for="">NOMBRE:</label>
                    <input  type="text" name="nombres" id="nombres" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">APELLIDOS:</label>
                    <input type="text" name="apellidos" id="apellidos" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">NUMERO DE CAMISA:</label>
                    <input type="text" name="numero_camisa" id="numero_camisa" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">APODO:</label>
                    <input type="text" name="apodo" id="apodo" class="form-control">
                </div>
                <hr>
                <button class="btn btn-primary" type="submit">GUARDAR JUGADOR</button>
                <a href="{{route('jugador.index')}}" class="btn btn primary">CANCELAR</a>
            </form>

        </div>
    </div>
</div>


</body>
</html>

