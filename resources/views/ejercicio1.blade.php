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
    <h2>Operaciones Aritmeticas</h2>
    <form action="{{route('opejercicio1')}}" method="POST">
        {{csrf_field()}}

  <label for="lname">Ingrese el Primer Numero :</label><br>
  <input type="double" id="lname" name="numero1"><br>
  <label for="lname">Ingrese el Segundo Numero :</label><br>
  <input type="double" id="lname" name="numero2"><br>
  <input type="submit" value="Aceptar"><br>

</form>
</body>
</html>
