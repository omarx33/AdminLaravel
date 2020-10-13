@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row">



        <div class="col-sm-4">
            <h3>Editar: {{$user->name}} </h3>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <form  action="{{route('usuarios.update',$user->id)}}" method="POST">
       @method('PATCH') {{-- este metodo activara para enviar al metodo update del controlador --}}

            @csrf {{-- token --}}

                <div class="form-group">
                  <label for="nombre">Nombre</label>
                  <input type="text" class="form-control" name="nombre" id="nombre" value="{{$user->name}}">

                </div>

                <div class="form-group">
                    <label for="mail">Email </label>
                    <input type="email" class="form-control" name="email" id="email" value="{{$user->email}}">

                  </div>



                <button type="submit" class="btn btn-primary">editar</button>
                <button type="reset" class="btn btn-danger">Cancelar</button>
              </form>


        </div>
    </div>
</div>

<script>

$(document).ready(function(){


});

</script>

@endsection

