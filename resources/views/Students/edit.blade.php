@extends('plantillaweb')
    @section('home_web')
        <h2>Editar registro de el Estudiante{{$student->id}}</h2>
        <form action="{{route('student.update', $student)}}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf

        <label>num_tarjeta del Estudiante</label>
        <input type="text" name="num_tarjeta" placeholder="num_tarjeta" class="form-control mb-2" value="{{$student->num_tarjeta}}">

        <label>Nombre del Estudiante</label>
        <input type="text" name="nombres" placeholder="nombres" class="form-control mb-2" value="{{$student->nombres}}">

        <label>celular del Estudiante</label>
        <input type="text" name="celular" placeholder="celular" class="form-control mb-2" value="{{$student->celular}}">

        <label>correo del Estudiante</label>
        <input type="text" name="correo" placeholder="correo" class="form-control mb-2" value="{{$student->correo}}">

        <button type="submit" class="btn btn-primary">Editar</button>


    </form>
@endsection
