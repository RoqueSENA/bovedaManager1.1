@extends('layouts.app')
@section('content')

<div class="container">
    
    <h1>Usuarios</h1>
    <ul>
        @foreach ($usuarios as $usuario)
        <li>{{ $usuario }}</li>
        @endforeach
    </ul>
</div>

@endsection