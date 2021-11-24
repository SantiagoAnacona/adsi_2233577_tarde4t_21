@extends('plantillaweb')

@section('home_web')

<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Tarjeta de identidad</th>
        <th scope="col">Nombre</th>
        <th scope="col">Celular</th>
        <th scope="col">Correo</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($students as $student)
      <tr>
        <th scope="row">{{$student->id}}</th>
        <td>{{$student->num_tarjeta}}</td>
        <td>{{$student->nombres}}</td>
        <td>{{$student->celular}}</td>
        <td>{{$student->correo}}</td>
        <td>
            <a href="{{route('student.edit', $student)}}">
                <button type="button" class="btn btn-warning btn-sm">Editar</button>
            </a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>


@endsection
