@extends('layout.template')

@section('title', 'Lista de Editoriales')

@section('content')
<div class="row">
    <div class="col-md-12">
        
        <a class="btn btn-primary" href="{{ route('editoriales.create') }}">Nuevo Editorial</a>
        <br><br>
        <table class="table table-striped table-bordered" id="tabla">
            <thead class="table-dark">
                <tr class="text-center">
                    <th>Código del Editorial</th>
                    <th>Nombre del Editorial</th>
                    <th>Contacto</th>
                    <th>Teléfono</th>
                    <th>Operaciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($editoriales as $editorial)
                    <tr>
                        <td>{{ $editorial->codigo_editorial }}</td>
                        <td>{{ $editorial->nombre_editorial }}</td>
                        <td>{{ $editorial->contacto }}</td>
                        <td>{{ $editorial->telefono }}</td>
                        <td class="align-middle">
                            <div class="d-flex justify-content-center gap-1 align-items-center">
                                <a href="{{ route('editoriales.edit', $editorial->codigo_editorial) }}" class="btn btn-warning">Editar</a>

                                <form action="{{ route('editoriales.destroy', $editorial->codigo_editorial) }}" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar esta editorial?');">
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
