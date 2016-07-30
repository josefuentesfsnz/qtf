@extends('layout/layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                    <div class="jumbotron text-center">
                        <h1 class="panel-heading">Categorias</h1>
                    </div>
                <div class="panel-body">

                    <table class="table table-striped">
                        <thead>
                            <th>id</th>
                            <th>Nombre</th>
                            <th >
                                <a href="{{route('admin.categorias.create')}}" class="btn btn-info">
                                    <span class="glyphicon glyphcon-remove-circle" aria-hidden="true">
                                         Crear Nuevo
                                    </span>
                                </a>
                            </th>
                        </thead>
                        <tbody>
                            @foreach($categorias as $categoria)

                            <tr>
                                <td>{{ $categoria->id }}</td>
                                <td>{{ $categoria->name }}</td>
                                <td>

                                    <a href="{{ route('admin.categorias.edit', $categoria->id) }}" class="btn btn-primary">
                                        <span class="glyphicon glyphcon-remove-circle" aria-hidden="true">
                                             editar
                                        </span>
                                    </a>

                                    <a href="{{ route('admin.categorias.destroy', $categoria->id) }}" class="btn btn-danger">
                                        <span class="glyphicon glyphcon-remove-circle" aria-hidden="true">
                                             eliminar
                                        </span>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {!! $categorias->render() !!}
                </div>

            </div>
        </div>
    </div>
</div>
@endsection