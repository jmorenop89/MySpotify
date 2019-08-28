@extends('layout.index')

@section('titulo')
    Artista
@endsection

@section('titulo-seccion')
    Artista
@endsection

@section('contenido')
    <div class="clearfix">&nbsp;</div>
    <a href="{{ route('artista.create') }}" class="btn btn-info">NUEVO</a>
    <div class="clearfix">&nbsp;</div>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Nacionalidad</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($objects as $object)
                <tr>
                    <td>{{ $object->nombre }}</td>
                    <td>{{ $object->apellido }}</td>
                    <td>{{ $object->nacionalidad }}</td>
                    <td>
                        <a href="{{ route('artista.edit',$object->id) }}">Editar</a>
                        <a href="">Eliminar</a>
                    </td>
                </tr>
           @endforeach
            </tbody>
        </table>
        {{ $objects->render() }}
    </div>
@endsection