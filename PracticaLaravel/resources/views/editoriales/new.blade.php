@extends('layout.template')

@section('title', isset($editorial) ? 'Editar Editorial' : 'Nuevo Editorial')

@section('content')
<div class="row">
    <div class="col-md-7">
        <form action="{{ isset($editorial) ? route('editoriales.update', $editorial->codigo_editorial) : route('editoriales.store') }}" method="POST">
            @csrf
            @if(isset($editorial))
                @method('PUT')
            @endif

            <div class="mb-3">
                <label for="codigo_editorial" class="form-label">Código del Editorial:</label>
                <input 
                    type="text" 
                    class="form-control" 
                    id="codigo_editorial" 
                    name="codigo_editorial" 
                    value="{{ old('codigo_editorial', $editorial->codigo_editorial ?? '') }}" 
                    placeholder="Ingresa el código del editorial" 
                    required 
                    {{ isset($editorial) ? 'readonly' : '' }}>
            </div>

            <div class="mb-3">
                <label for="nombre_editorial" class="form-label">Nombre del Editorial:</label>
                <input 
                    type="text" 
                    class="form-control" 
                    id="nombre_editorial" 
                    name="nombre_editorial" 
                    value="{{ old('nombre_editorial', $editorial->nombre_editorial ?? '') }}" 
                    placeholder="Ingresa el nombre del editorial" 
                    required>
            </div>

            <div class="mb-3">
                <label for="contacto" class="form-label">Contacto:</label>
                <input 
                    type="text" 
                    class="form-control" 
                    id="contacto" 
                    name="contacto" 
                    value="{{ old('contacto', $editorial->contacto ?? '') }}" 
                    placeholder="Ingresa el nombre del contacto" 
                    required>
            </div>

            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono:</label>
                <input 
                    type="tel" 
                    class="form-control" 
                    id="telefono" 
                    name="telefono" 
                    value="{{ old('telefono', $editorial->telefono ?? '') }}" 
                    placeholder="Ingresa el teléfono del contacto" 
                    required>
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
            <a class="btn btn-danger" href="{{ route('editoriales.index') }}">Cancelar</a>
        </form>
    </div>
</div>
@endsection
