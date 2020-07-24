@extends('layout')

@section('tittle')
  Productos
@endsection
    
@section('content')
    
    <div class="col-12 ">

        <div class="d-flex justify-content-between align-items-center">
        <h1 class="text-danger">Productos On-fire!</h1>
        @auth
        @if(Auth::user()->estado=='activo' or Auth::user()->typeuser=='Administrador')
        <div class="btn-group btn-group-sm">
            <a class="btn btn-primary" href="{{ route('ingresar_producto') }}">Ingresar nuevo producto</a> 
        </div>
        @endif
        @endauth
        </div>

        <div class="row row-cols-1 row-cols-md-4">
        
            @isset($productos)
                @foreach($productos as $item)
                <div class="col mb-3">
                    <div class="card h-100">
                        <div class="name-container ">
                            <h4> {{$item->Nombre}} </h4>   
                        </div>
                        <div class="image-container img-thumbnail ">
                            @if(!@empty($item->Imagen))
                                    <img src="{{asset('storage').'/'.($item->Imagen)}}" >
                            @endif
                        </div>
                        <div class="detail-container"> 
                            {{$item->Descripción}}
                        </div>
                        <div class="price-container mt-auto">
                            <h4>${{$item->Precio}}</h4>
                        </div>

                        <button type="button" class="btn btn-info">Agregar al carrito</button>

                        @auth
                        @if(Auth::user()->estado=='activo' or Auth::user()->typeuser=='Administrador')
                            <a href="{{route('editar_producto', $item)}}" class="btn btn-warning ">Editar</a>
                            
                            <form action="{{route('eliminar_producto', $item)}}" method="POST" class="d-inline">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger btn-block" type="submit" onclick="return confirm('¿Borrar producto?') ">Eliminar</button>
                            </form>     
                        @endif
                        @endauth
                    </div>
                </div>
                @endforeach
            @endisset

        </div>
    </div>

@endsection


