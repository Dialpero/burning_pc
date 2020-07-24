@extends('layout')

@section('tittle')
    Equipos   
@endsection

@section('content')
<div class="container">

    <div class="d-flex justify-content-between align-items-center">
    <h1 class="display-4 mb-0">Productos</h1>
    @auth
    @if(Auth::user()->estado=='activo' or Auth::user()->typeuser=='Administrador')
    <div class="btn-group btn-group-sm">
        <a class="btn btn-primary" href="{{ route('academics.create') }}">Ingresar nuevo producto</a> 
        <a class="btn btn-primary" href="{{ route('evaluaciones.index') }}">Ir a Pautas de evaluación</a> 
    </div>
    @endif
    @endauth
    </div>
    <hr>
    <p class="lead text-secondary">Académicos actuales</p>
    <ul class="list-group">
        @forelse ($academics as $academic)
            <!-- == string === int -->
            <li class="list-group-item border-0 mb-3 shadow-sm">
            <a class="text-secondary d-flex justify-content-between align-items-center" href="{{ route('academics.show', $academic)}}"> 
                <span class="font-weight-bold">Nombre: {{ $academic->nombre_1 }} {{ $academic->apellido_1 }} <br>Rut: {{ $academic->rut }}</span> 
                <span class="text-black-50">{{ $academic->created_at->format('d/m/Y')}} </span> 
            </a>
            </li>
         
        
        @empty
            <li class="list-group-item border-0 mb-3 shadow-sm">
                No hay académicos registrados
            </li>
        @endforelse
        {{ $academics->links() }}
        <form method="POST" action="{{ route('evaluaciones.promedio') }}" class="was-validated">
            @csrf @method('PATCH')
            <button type="submit" class="btn btn-warning">Ver ranking</button>
        </form>
            
    </ul>
</div>
@endsection