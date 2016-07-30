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