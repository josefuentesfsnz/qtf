@extends('layout/layout')

@section('content')
<div class="container">
<div class="row">
    <a href="{{route('admin.evento.create')}}" class="btn btn-primary">
        <span class="glyphicon glyphcon-remove-circle" aria-hidden="true">
            <h4>Crear Evento </h4>
        </span>
    </a>
</div>
    


    @foreach($eventos as $evento)
    <div class="row">
        
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <h1 class="panel-heading">{{ $evento->titulo }}</h1>
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                            <th>Horarios</th>
                            <th>Descripción</th>
                            <th>Privacidad</th>
                            <th>Lugar</th>
                            <th>Maximo de asistentes</th>
                            <th>Categoria</th>
                        </thead>
                        <tbody>
                            <tr>
                                @if($evento->all_day == 1)
                                 <td>Todo el día</td>

                                @else
                                <td>
                                Inicio: {{ $evento->inicio->day .'-'.$evento->inicio->month .'-'. $evento->inicio->year }}
                                <br>
                                 Final: {{ $evento->final->day .'-'.$evento->final->month .'-'. $evento->final->year }}
                                 </td>
                                @endif



                                <td> {{ $evento->descripcion }}</td>
                                @if($evento->privacidad == 1)
                                <td> Privado</td>
                                @else
                                <td> Público</td>
                                @endif
                                <td> {{ $evento->lugar }}</td>
                                <td> {{ $evento->cantidad_max }}</td>
                                <td> {{ $evento->categoria_id }}</td>
                            </tr>
                        </tbody>

                    </table>
                   <td>
                        <a href="{{ route('admin.evento.edit', $evento->id) }}" class="btn btn-primary">
                            <span class="glyphicon glyphcon-remove-circle" aria-hidden="true">
                                Editando
                            </span>
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('admin.evento.destroy', $evento->id) }}" class="btn btn-danger">
                            <span class="glyphicon glyphcon-remove-circle" aria-hidden="true">
                                Eliminar
                            </span>
                        </a>
                    </td>
                </div>


            </div>
        
        </div>
    </div>
    
        @endforeach
 {!! $eventos->render() !!}
    </div>
</div>
@endsection