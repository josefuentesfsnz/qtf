@extends('layout/layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="jumbotron text-center">
                    <h2 class="panel-heading">Creando Nuevo Evento</h2>
                </div>
                <div class="panel-body">
                    {!! Form::open(['route' => ['admin.evento.store', 'user_id' => Auth::User()->id], 'method' => 'POST']) !!}
                    <div class= "form-group">
                        {!! Form::label('titulo', 'Titulo') !!}
                        {!! Form::text('titulo', null,['class'=>'form-control', 'placeholder' => 'titulo del evento','required'])!!}
                    </div>
                    <div class= "form-group">
                        {!! Form::label('lugar', 'Lugar') !!}
                        {!! Form::text('lugar', null,['class'=>'form-control', 'placeholder' => 'lugar del evento','required'])!!}
                    </div>
                    
                    <div class= "form-group">
                        {!! Form::label('cantidad_max', 'Cupos') !!}
                        {!! Form::text('cantidad_max', null,['class'=>'form-control', 'placeholder' => 'cantidad de invitados','required'])!!}
                    </div>
                    <div class= "form-group">
                        {!! Form::label('all_day', 'Todo el día') !!}
                        {!! Form::checkbox('all_day', null, ['all_day'=>'all_day'])!!}
                    
                        {!! Form::label('publico', 'Privado') !!}
                        {!! Form::checkbox('privacidad', true, ['privacidad'=>'privacidad'])!!}
                    </div>
                    <div class= "form-group">
                        {!! Form::label('descripcion', 'Descripcion') !!}
                        {!! Form::textarea('descripcion', null,['size'=>'3x5', 'class'=>'form-control','required'])!!}
                    </div>




                     <div class= "form-group ">
                        {!! Form::submit('Crear Evento', ['class'=> 'btn btn-large btn-block btn-primary', 'type'=>'button']); !!}
                    </div>
                </div>
                {!! Form::close() !!}
            </div>

            </div>
        </div>
    </div>
</div>


@endsection