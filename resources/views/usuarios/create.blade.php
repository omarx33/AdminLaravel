@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row">
        <div class="col-sm-4">
        <form  action="{{route('usuarios.store')}}" method="POST">

            @csrf {{-- token --}}

                <div class="form-group">
                  <label for="nombre">Nombre</label>
                  <input type="text" class="form-control" name="nombre" id="nombre" >

                </div>

                <div class="form-group">
                    <label for="mail">Email </label>
                    <input type="email" class="form-control" name="email" id="email">

                  </div>

                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" name="password" id="password" class="form-control" >
                </div>

                <button type="submit" class="btn btn-primary">Registrar</button>
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

