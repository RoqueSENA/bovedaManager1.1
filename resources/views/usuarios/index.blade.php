@extends('layouts.app')
@section('title', 'Lista de Usuarios')

@section('content')

<div class="container">
    <div class="row">
        <div class="col">
			<a href="{{ '/usuarios/create' }}" class ="btn btn-succcess">Crear Usuario</a>
            <div class="card">
              <table class="table table-striped ">
               <thead>
                 <tr>
                   <th>CODIGO</th>
                   <th>NOMBRE</th>
                   <th>PASSWORD</th>
                   <th>ROL</th>
                   <th>ACCION</th>
                 </tr>
               </thead>
               <tbody>
                   @foreach($usuarios as $usuario)
                  <tr>
                  	<td>{{$usuario->codUser}}</td>
                  	<td>{{$usuario->nomUser}}</td>
                  	<td>{{$usuario->passUser}}</td>
                  	<td>{{$usuario->rolUser}}</td>
                  	<td><a href="{{ url('/usuarios/'.$usuario->id.'/edit')}}" class="btn btn-success"> Editar </a>
            			<form action="{{ url('/usuarios/'.$usuario->id )}}" class="d-inline" method="POST">
            				@csrf
            				{{method_field('DELETE')}}
            			<input type="submit" class="btn btn-danger" onclick="return confirm('¿Confirma borrar?')" value="Borrar">
            			</form>
            		</td>
                  </tr>
            		@endforeach
               </tbody>
              </table>
            </div>
        </div>
    </div>

</div>

@endsection