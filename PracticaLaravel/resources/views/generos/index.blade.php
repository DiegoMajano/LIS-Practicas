@extends('layout.template')

@section('title', 'Lista de Géneros')

@section('content')
<div class="row">
    <div class="col-md-12">
        <a class="btn btn-primary mb-3" href="{{ route('generos.create') }}">Nuevo Género</a>

        <table class="table table-striped table-bordered" id="tabla">
            <thead class="table-dark text-center">
                <tr>
                    <th>Código del Género</th>
                    <th>Nombre del Género</th>
                    <th>Descripción</th>
                    <th>Operaciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($generos as $genero)
                    <tr>
                        <td>{{ $genero->id_genero }}</td>
                        <td>{{ $genero->nombre_genero }}</td>
                        <td>{{ $genero->descripcion }}</td>
                        <td class="align-middle">
                            <div class="d-flex justify-content-center gap-1 align-items-center">
                                <a href="{{ route('generos.edit', $genero->id_genero) }}" class="btn btn-warning">Editar</a>

                                <form action="{{ route('generos.destroy', $genero->id_genero) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar este género?')">Eliminar</button>
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
