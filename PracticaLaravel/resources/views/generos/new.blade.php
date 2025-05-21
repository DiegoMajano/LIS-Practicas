@extends('layout.template')

@section('title', isset($genero) ? 'Editar Género' : 'Nuevo Género')

@section('content')
<div class="row">
    <div class="col-md-7">

        <form action="{{ isset($genero) ? route('generos.update', $genero->id_genero) : route('generos.store') }}" method="POST">
            @csrf
            @if(isset($genero))
                @method('PUT')
            @endif

            <div class="mb-3">
                <label {{ !isset($genero) ? 'hidden' : '' }} for="id_genero" class="form-label">ID del Género:</label>
                <input {{ !isset($genero) ? 'hidden' : '' }}
                    type="text" 
                    name="id_genero" 
                    id="id_genero" 
                    class="form-control" 
                    placeholder="Ingresa el ID del género" 
                    value="{{ old('id_genero', $genero->id_genero ?? '') }}" 
                    {{ isset($genero) ? 'readonly' : '' }}
                >
            </div>

            <div class="mb-3">
                <label for="nombre_genero" class="form-label">Nombre del Género:</label>
                <input 
                    type="text" 
                    name="nombre_genero" 
                    id="nombre_genero" 
                    class="form-control" 
                    placeholder="Ingresa el nombre del género" 
                    value="{{ old('nombre_genero', $genero->nombre_genero ?? '') }}"
                    required
                >
            </div>

            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción:</label>
                <input 
                    type="text" 
                    name="descripcion" 
                    id="descripcion" 
                    class="form-control" 
                    placeholder="Ingresa la descripción del género" 
                    value="{{ old('descripcion', $genero->descripcion ?? '') }}"
                    required
                >
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{ route('generos.index') }}" class="btn btn-danger">Cancelar</a>
        </form>
    </div>
</div>
@endsection
