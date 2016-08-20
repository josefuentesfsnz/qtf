@extends('layout/layout')

@section('content')





<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                    <div class="jumbotron text-center">
                        <h2 class="panel-heading">Editar a Evento</h2>
                        @foreach($categorias as $categoria)
                            <p>{!! $categoria->id !!}</p>
                            <p>{!! $categoria->name !!}</p>
                        @endforeach


                    </div>
                <div class="panel-body">
                    {!! Form::open(['route'=>['admin.evento.update', $evento], 'method'=>'PUT']) !!}
                    <div class= "form-group">
                        {!! Form::label('titulo', 'Titulo')!!}
                        {!! Form::text('titulo', $evento->titulo, ['class'=>'form-control', 'placeholder'=>'titulo', 'required'])!!}
                    </div>
                    <div class= "form-group">
                        {!! Form::label('lugar', 'Lugar')!!}
                        {!! Form::text('lugar', $evento->lugar, ['class'=>'form-control', 'placeholder'=>'lugar', 'required'])!!}
                    </div>
                    <div class= "form-group">
                        {!! Form::label('cantidad_max', 'Capacidad') !!}
                        {!! Form::text('cantidad_max', $evento->cantidad_max,['class'=>'form-control', 'placeholder' => 'cantidad_max','required'])!!}
                    </div>
                    <div class= "form-group">
                        {!! Form::label('todo el dia', 'Todo el día') !!}

                        @if($evento->all_day == 1 )

                        {!! Form::checkbox('all_day', 'true', true) !!}

                        @else
                            {!! Form::checkbox('all_day', 'true', false) !!}
                        @endif

                    </div>
                    <div class= "form-group">
                        {!! Form::label('privacidad', 'Privado') !!}

                        @if($evento->privacidad == 1 )

                        {!! Form::checkbox('privacidad', 'true', true) !!}

                        @else
                            {!! Form::checkbox('privacidad', 'true', false) !!}
                        @endif

                    </div>
                    <div class= "form-group">
                        {!! Form::label('descripcion', 'Descripción') !!}
                        {!! Form::textarea('descripcion', $evento->descripcion,['class'=>'form-control', 'placeholder' => 'descripcion'])!!}
                    </div>

                    


                    <div class="form-group">
                         {!! Form::submit('Guardar', ['class'=>'btn btn-primary']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>






            </div>
        </div>
    </div>
</div>

@endsection