@extends('layout.template')

@section('title', 'Lista de autores')

@section('content')
<div class="row">
    <div class="col-md-12">
        <a class="btn btn-primary" href="{{ route('autores.create') }}">Nuevo Autor</a>
        <br><br>
        <table class="table table-striped table-bordered" id="tabla">
            <thead class="table-dark">
                <tr class="text-center">
                    <th>Código del Autor</th>
                    <th>Nombre del Autor</th>
                    <th>Nacionalidad</th>
                    <th>Operaciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($autores as $autor)
                    <tr>
                        <td>{{ $autor->codigo_autor }}</td>
                        <td>{{ $autor->nombre_autor }}</td>
                        <td>{{ $autor->nacionalidad }}</td>
                        <td class="align-middle">
                            <div class="d-flex justify-content-center gap-1 align-items-center">
                                {{-- Editar --}}
                                <a href="{{ route('autores.edit', $autor->codigo_autor) }}" class="btn btn-warning">Editar</a>

                                {{-- Eliminar --}}
                                <form action="{{ route('autores.destroy', $autor->codigo_autor) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este autor?');">
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
