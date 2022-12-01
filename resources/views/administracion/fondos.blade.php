@extends('layouts.app')
@section('content')

<div class="container">
    <h1>Fondos</h1>
    <ul>
        @foreach ($fondos as $fondo)
        <li>{{ $fondo }}</li>
        @endforeach
    </ul>   
</div>

@endsection


