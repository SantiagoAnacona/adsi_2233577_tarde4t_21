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
    <h2>Radio y altura de tu cilindro</h2>
    <form action="{{route('opejercicio5')}}" method="POST">
        {{csrf_field()}}

  <label for="lname">Ingrese su valor para el radio de tu cilindro:</label><br>
  <input type="double" id="lname" name="radio"><br>
  <label for="lname">Ingrese la el valor de la altura de tu cilindro:</label><br>
  <input type="double" id="lname" name="altura"><br>
  <input type="submit" value="Aceptar"><br>

</form>
</body>
</html>
