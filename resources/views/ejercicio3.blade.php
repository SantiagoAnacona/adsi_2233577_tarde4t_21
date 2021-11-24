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
    <h2>Calculo de salario</h2>
    <form action="{{route('ejercicio3')}}" method="POST">
        {{csrf_field()}}




  <label for="fname">Ingrese el Nombre:</label><br>
  <input type="text" id="fname" name="nombre"><br>
  <label for="lname">Ingrese el valor del Salario:</label><br>
  <input type="double" id="lname" name="salario"><br>
  <label for="lname">Ingrese las horas trabajadas :</label><br>
  <input type="double" id="lname" name="horas"><br>
  <input type="submit" value="Aceptar"><br>

</form>
</body>
</html>
