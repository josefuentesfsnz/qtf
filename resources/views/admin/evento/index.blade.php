@extends('layout/layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                    <div class="jumbotron text-center">
                        <h1 class="panel-heading">Eventos</h1>
                    </div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                            <th>id</th>
                            <th>titulo</th>
                            <th>lugar</th>
                            <th>allday</th>
                        </thead>
                        <tbody>
                            @foreach($evento as $evento)

                            <tr>
                                <td>{{ $evento->id }}</td>
                                <td>{{ $evento->titulo }}</td>
                                <td>{{ $evento->lugar }}</td>
                                <td>{{ $evento->all_day }}</td>

                                <a href="{{ route('admin.evento.edit') }}" class="btn btn-primary">
                                    <span class="glyphicon glyphcon-remove-circle" aria-hidden="true">
                                         editar
                                    </span>
                                </a>

                                <a href="{{ route('admin.evento.destroy', $evento->id) }}" class="btn btn-danger">
                                    <span class="glyphicon glyphcon-remove-circle" aria-hidden="true">
                                         eliminar
                                    </span>
                                </a>
                            </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {!! $evento->render() !!}
                </div>

            </div>
        </div>
    </div>
</div>
@endsection