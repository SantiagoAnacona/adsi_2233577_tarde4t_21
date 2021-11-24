<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <br>
    <h2>Numero Entero</h2>
    <form action="{{route('opejercicio4')}}" method="POST">
        {{csrf_field()}}

    <label for="fname">Ingrese un numero entero</label><br>
    <input type="number" id="fname" name="numero_entero"><br>

    <input type="submit" value="Aceptar"><br>
</body>
</html>
