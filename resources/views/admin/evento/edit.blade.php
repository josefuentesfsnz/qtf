@extends('layout/layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                    <div class="jumbotron text-center">
                        <h2 class="panel-heading">Editar a Evento</h2>
                        

                    </div>
                <div class="panel-body">
                    {!! Form::open(['route'=>['admin.evento.update', $evento], 'method'=>'PUT']) !!}
                    <div class= "form-group">
                        {!! Form::label('titulo', 'Titulo')!!}
                        {!! Form::text('titulo', $evento->titulo, ['class'=>'form-control', 'placeholder'=>'titulo', 'required'])!!}
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