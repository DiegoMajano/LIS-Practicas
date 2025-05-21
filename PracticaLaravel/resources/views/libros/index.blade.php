@extends('layout.template')

@section('title', 'Lista de Libros')

@section('content')
<div class="row">
    <div class="col-md-12">
        <a class="btn btn-primary my-3" href="{{ route('libros.create') }}">Nuevo Libro</a>

        <table class="table table-striped table-bordered" id="tabla">
            <thead class="table-dark text-center">
                <tr>
                    <th>Código del Libro</th>
                    <th>Nombre del Libro</th>
                    <th>Existencias</th>
                    <th>Precio</th>
                    <th>Autor</th>
                    <th>Editorial</th>
                    <th>Género</th>
                    <th>Descripción</th>
                    <th>Operaciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($libros as $libro)
                    <tr>
                        <td>{{ $libro->codigo_libro }}</td>
                        <td>{{ $libro->nombre_libro }}</td>
                        <td>{{ $libro->existencias }}</td>
                        <td>${{ number_format($libro->precio, 2) }}</td>
                        <td>{{ $libro->autor->nombre_autor }}</td>
                        <td>{{ $libro->editorial->nombre_editorial }}</td>
                        <td>{{ $libro->genero->nombre_genero }}</td>
                        <td>{{ $libro->descripcion }}</td>
                        <td class="align-middle">
                            <div class="d-flex justify-content-center gap-1 align-items-center">
                                <a href="{{ route('libros.edit', $libro->codigo_libro) }}" class="btn btn-warning">Editar</a>
                                <form action="{{ route('libros.destroy', $libro->codigo_libro) }}" method="POST" onsubmit="return confirm('¿Deseas eliminar este libro?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
