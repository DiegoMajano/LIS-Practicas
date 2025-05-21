@extends('layout.template')

@section('title', isset($libro) ? 'Editar Libro' : 'Nuevo Libro')

@section('content')
<div class="row">
    <div class="col-md-7">

        <form action="{{ isset($libro) ? route('libros.update', $libro->codigo_libro) : route('libros.store') }}" method="POST">
            @csrf
            @if(isset($libro))
                @method('PUT')
            @endif

            <div class="mb-3">
                <label for="codigo_libro" class="form-label">Código del Libro:</label>
                <input required {{ isset($libro) ? 'readonly' : '' }}
                    value="{{ old('codigo_libro', $libro->codigo_libro ?? '') }}"
                    type="text" class="form-control" name="codigo_libro" id="codigo_libro" placeholder="Ingresa el código del libro">
            </div>

            <div class="mb-3">
                <label for="nombre_libro" class="form-label">Nombre del Libro:</label>
                <input required
                    value="{{ old('nombre_libro', $libro->nombre_libro ?? '') }}"
                    type="text" class="form-control" name="nombre_libro" id="nombre_libro" placeholder="Ingresa el nombre del libro">
            </div>

            <div class="mb-3">
                <label for="existencias" class="form-label">Existencias:</label>
                <input required
                    value="{{ old('existencias', $libro->existencias ?? '') }}"
                    type="number" min="0" class="form-control" id="existencias" name="existencias" placeholder="Ingresa las existencias del libro">
            </div>

            <div class="mb-3">
                <label for="precio" class="form-label">Precio:</label>
                <input required
                    value="{{ old('precio', $libro->precio ?? '') }}"
                    type="number" min="0.00" step="0.05" class="form-control" id="precio" name="precio" placeholder="Ingresa el precio del libro">
            </div>

            <div class="mb-3">
                <label for="codigo_autor" class="form-label">Autor:</label>
                <select required class="form-control" name="codigo_autor" id="codigo_autor">
                    <option value="">Seleccionar el autor</option>
                    @foreach ($autores as $autor)
                        <option value="{{ $autor->codigo_autor }}"
                            {{ old('codigo_autor', $libro->codigo_autor ?? '') == $autor->codigo_autor ? 'selected' : '' }}>
                            {{ $autor->codigo_autor }} - {{ $autor->nombre_autor }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="codigo_editorial" class="form-label">Editorial:</label>
                <select required class="form-control" name="codigo_editorial" id="codigo_editorial">
                    <option value="">Seleccionar la editorial</option>
                    @foreach ($editoriales as $editorial)
                        <option value="{{ $editorial->codigo_editorial }}"
                            {{ old('codigo_editorial', $libro->codigo_editorial ?? '') == $editorial->codigo_editorial ? 'selected' : '' }}>
                            {{ $editorial->codigo_editorial }} - {{ $editorial->nombre_editorial }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="id_genero" class="form-label">Género:</label>
                <select required class="form-control" name="id_genero" id="id_genero">
                    <option value="">Seleccionar género</option>
                    @foreach ($generos as $genero)
                        <option value="{{ $genero->id_genero }}"
                            {{ old('id_genero', $libro->id_genero ?? '') == $genero->id_genero ? 'selected' : '' }}>
                            {{ $genero->id_genero }} - {{ $genero->nombre_genero }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción:</label>
                <input required
                    value="{{ old('descripcion', $libro->descripcion ?? '') }}"
                    type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Ingresa la descripción del libro">
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
            <a class="btn btn-danger" href="{{ route('libros.index') }}">Cancelar</a>
        </form>
    </div>
</div>
@endsection
