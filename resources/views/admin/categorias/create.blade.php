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
                    {!! Form::open(['route'=>'admin.categorias.store', 'method'=>'POST']) !!}
                    <div class= "form-group">
                        {!! Form::label('name', 'Nombre')!!}
                        {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'nombre', 'required'])!!}
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