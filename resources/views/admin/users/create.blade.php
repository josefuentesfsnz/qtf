@extends('layout/layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                    <div class="jumbotron text-center">
                        <h1 class="panel-heading">creando</h1>
                        

                    </div>
                <div class="panel-body">
                    {!! Form::open(['route'=>'admin.users.store', 'method'=>'POST']) !!}
                    <div class= "form-group">
                        {!! Form::label('name', 'Nombre')!!}
                        {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'nomre', 'required'])!!}
                    </div>
                    <div class= "form-group">
                        {!! Form::label('email', 'Correo')!!}
                        {!! Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'email', 'required'])!!}
                    </div>
                    <div class= "form-group">
                        {!! Form::label('Numero', 'Telefono')!!}
                        {!! Form::text('telefono', ' ', ['class'=>'form-control', 'placeholder'=>'telefono', 'required'])!!}
                    </div>
                    <div class= "form-group">
                        {!! Form::label('password', 'password')!!}
                        {!! Form::password('password',['class'=>'form-control', 'placeholder'=>'telefono', 'required'])!!}                    </div>
                    </div>

                    <div class="form-group">
                         {!! Form::submit('Registrar', ['class'=>'btn btn-primary']) !!}
                    </div>


                    {!! Form::close() !!}
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
