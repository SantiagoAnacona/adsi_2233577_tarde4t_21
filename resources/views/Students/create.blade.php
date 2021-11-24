@extends('plantillaweb');

@section('home_web');
<h2>Formulario de registro de Estudiantes</h2>
<form action="{{route('student.store')}}" method="POST">
    @csrf
    <div class="mb-3">
      <label>Numero de Tarjeta de Identidad</label>
      <input type="number" class="form-control" name="num_tarjeta" placeholder="Escibe el Nombre completo">
    </div>
    <div class="mb-3">
        <label>Nombre</label>
        <input type="text" class="form-control" name="nombres" placeholder="Escibe el Nombre completo">
      </div>
      <div class="mb-3">
        <label>Celular</label>
        <input type="number" class="form-control" name="celular" placeholder="Numero celular">
      </div>
      <div class="mb-3">
        <label>Correo</label>
        <input type="email" class="form-control" name="correo" placeholder="Email">
      

    <button type="submit" class="btn btn-primary">Aceptar</button>
  </form>

@endsection


