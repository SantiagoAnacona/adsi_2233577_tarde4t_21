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
    <h2>Control de Calificaciones</h2>
    <form action="{{route('opejercicio')}}" method="POST">
        {{csrf_field()}}




  <label for="fname">Ingrese el Nombre:</label><br>
  <input type="text" id="fname" name="Nombre"><br>
  <label for="lname">Ingrese calificación del primer parcial:</label><br>
  <input type="double" id="lname" name="primer_parcial"><br>
  <label for="lname">Ingrese calificación del examen final:</label><br>
  <input type="double" id="lname" name="Examen_final"><br>
  <input type="submit" value="Aceptar"><br>

</form>
</body>
</html>
