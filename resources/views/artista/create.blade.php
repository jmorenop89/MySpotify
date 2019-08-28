@extends('layout.index')

@section('titulo')
    Artista
@endsection

@section('titulo-seccion')
    Artista
@endsection

@section('contenido')
    <div class="clearfix">&nbsp;</div>
    <div class="table-responsive">
        <form action="{{ route('artista.store') }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <table class="table table-striped">
            <tr>
                <td><label for="">Nombre</label></td>
                <td>
                    <input type="text" name="nombre" id="">
                </td>
            </tr>
            <tr>
                <td><label for="">Apellido</label></td>
                <td>
                    <input type="text" name="apellido" id="">
                </td>
            </tr>
            <tr>
                <td><label for="">Nacionalidad</label></td>
                <td>
                    <input type="text" name="nacionalidad" id="">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Guardar" class="btn btn-success">
                </td>
                <td>
                    <a class="btn btn-info" href="{{ route('artista.index')}}">
                        Cancelar
                    </a>
                </td>
            </tr>
        </table>
        </form>
    </div>
@endsection