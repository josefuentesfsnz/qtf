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
                            <th>titulo</th>
                            <th>allday</th>
                            <th>Descripción</th>
                            <th>Privacidad</th>
                            <th>Lugar</th>
                            <th>Maximo de asistentes</th>
                            <th>hora de inicio</th>
                        </thead>
                        <tbody>
                            @foreach($eventos as $evento)

                            <tr>
                                <td>{{ $evento->titulo }}</td>
                                <td>{{ $evento->all_day}}</td>
                                <td> {{ $evento->descripcion }}</td>
                                @if($evento->privacidad == 1)
                                <td> Privado</td>
                                @else
                                <td> Público</td>
                                @endif
                                <td> {{ $evento->lugar }}</td>
                                <td> {{ $evento->cantidad_max }}</td>
                                <td> {{ $evento->inicio }}</td>
                                <td>
                                    <a href="{{ route('admin.evento.edit', $evento->id) }}" class="btn btn-primary">
                                        <span class="glyphicon glyphcon-remove-circle" aria-hidden="true">
                                            editar
                                        </span>
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('admin.evento.destroy', $evento->id) }}" class="btn btn-danger">
                                        <span class="glyphicon glyphcon-remove-circle" aria-hidden="true">
                                            eliminar
                                        </span>
                                    </a>
                                </td>
                            </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {!! $eventos->render() !!}
                </div>

            </div>
        </div>
    </div>
</div>
@endsection