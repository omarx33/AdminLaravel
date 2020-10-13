@extends('layouts.app')

@section('content')

<div class="container">
<h2>Lista user <a href="usuarios/create"> <button type="button" class="btn btn-success float-right">Agregar </button></a></h2>


<table class="table">
    <thead>
      <tr>
        <th scope="col"> Id</th>
        <th scope="col">Nombre</th>
        <th scope="col">MAil</th>
        <th>Acciones</th>

      </tr>
    </thead>
    <tbody>

        @foreach($users as $key => $user)
        <tr>
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>
           <a href="">

                <form action="{{route('usuarios.destroy',$user->id)}}" method="POST" >

                    <a href="{{route('usuarios.show',$user->id)}}"> <button type="button" class="btn btn-secondary" >Ver</button></a>

                    <a href="{{ route('usuarios.edit',$user->id)}}"><button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off">Editar</button></a>

                @csrf
@method('DELETE')
<button type="submit" class="btn btn-danger" data-toggle="button" aria-pressed="false" autocomplete="off">eliminar</button></a>

                </form>
                           </td>
          </tr>

        @endforeach

    </tbody>
  </table>

</div>


@endsection

