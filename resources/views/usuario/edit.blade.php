@extends('layout.usuarioLayout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                    <div class="jumbotron text-center">
                        <h2 class="panel-heading">Editar a {{$user->name}}</h2>
                        

                    </div>
                <div class="panel-body">
                    {!! Form::open(['route'=>['admin.users.update', $user], 'method'=>'PUT']) !!}
                    <div class= "form-group">
                        {!! Form::label('name', 'Nombre')!!}
                        {!! Form::text('name', $user->name, ['class'=>'form-control', 'placeholder'=>'nomre', 'required'])!!}
                    </div>
                    <div class= "form-group">
                        {!! Form::label('email', 'Correo')!!}
                        {!! Form::email('email', $user->email, ['class'=>'form-control', 'placeholder'=>'email', 'required'])!!}
                    </div>
                    <div class= "form-group">
                        {!! Form::label('Numero', 'Telefono')!!}
                        {!! Form::text('telefono', $user->telefono, ['class'=>'form-control', 'placeholder'=>'telefono', 'required'])!!}
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