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
                            <th></th>
                            <th></th>
                        </thead>
                        <tbody>
                            @foreach($eventos as $evento)

                            <tr>
                                <td>{{ $evento->id }}</td>
                                <td>{{ $evento->titulo }}</td>
                                <td>{{ $evento->lugar }}</td>
                                @if($evento->all_day = 1)
                                    <td>true</td>
                                @else
                                    <td>false</td>
                                @endif
                                <td> {{ $evento->user_id }}</td>
                                <td> {{ $evento->privacidad }}</td>
                                <td> {{ $evento->lugar }}</td>
                                <td> {{ $evento->cantidad_max }}</td>
                                <td> {{ $evento->inicio }}</td>
                                <td>
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