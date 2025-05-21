@extends('layout.template') 

@section('title', isset($autor) ? 'Editar Autor' : 'Nuevo Autor')

@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-7">
            <form action="{{ isset($autor) ? route('autores.update', $autor->codigo_autor) : route('autores.store') }}" method="POST">
                @csrf
                @if(isset($autor))
                    @method('PUT')
                @endif

                {{-- Mostrar errores de validación --}}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="mb-3">
                    <label for="codigo_autor" class="form-label">Código del Autor:</label>
                    <input 
                        type="text" 
                        name="codigo_autor" 
                        id="codigo_autor" 
                        class="form-control" 
                        placeholder="Ingresa el código del autor"
                        value="{{ old('codigo_autor', $autor->codigo_autor ?? '') }}"
                        {{ isset($autor) ? 'readonly' : '' }}
                        required
                    >
                </div>

                <div class="mb-3">
                    <label for="nombre_autor" class="form-label">Nombre del Autor:</label>
                    <input 
                        type="text" 
                        name="nombre_autor" 
                        id="nombre_autor" 
                        class="form-control" 
                        placeholder="Ingresa el nombre del autor"
                        value="{{ old('nombre_autor', $autor->nombre_autor ?? '') }}"
                        required
                    >
                </div>

                <div class="mb-3">
                    <label for="nacionalidad" class="form-label">Nacionalidad:</label>
                    <input 
                        type="text" 
                        name="nacionalidad" 
                        id="nacionalidad" 
                        class="form-control" 
                        placeholder="Ingresa la nacionalidad"
                        value="{{ old('nacionalidad', $autor->nacionalidad ?? '') }}"
                        required
                    >
                </div>

                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="{{ route('autores.index') }}" class="btn btn-danger">Cancelar</a>
            </form>
        </div>
    </div>
</div>
@endsection
