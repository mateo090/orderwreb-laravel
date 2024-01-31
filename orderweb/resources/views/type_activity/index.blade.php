@extends('templates.base')
@section('title', 'Listado actividades')
@section('header', 'Listado actividades')
@section('content')
<div class="row">
    <div class="col-lg-12 bm-4 d-grip gep-2 d-md-block">
        <a href="{{ route('type_activity.create') }}" class="btn btn-primary">Crear</a>
    </div>
</div>
    @include('templates.messages')

    <div class="col-lg-12 mb-4">
        <table id="table_data" class="table table-striped teble-hover">
        
        <thead>
            <tr>
                <th>Id</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td> Actividad de prueba de prueba</td>
                <td>
                    <a href="#"title="editar"
                        class="btn btn-info btn-circle btn-sm">
                        <i class="far fa-edit"></i>
                    </a>
                    <a href="#"title="eliminar"
                        class="btn btn-danger btn-circle btn-sm"
                        onclick="return remove()">
                        <i class="fas fa-trash"></i>
                    </a>
                </td>
            </tr>
        </tbody>
        </table>
    </div>

@endsection

@section('scripts')
    <script src="{{ asset('js/general.js') }}"> </script>
@endsection
