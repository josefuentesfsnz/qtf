@extends('layout/layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                    <div class="jumbotron text-center">
                        <h1 class="panel-heading">Lista de usuarios</h1>
                        

                    </div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                            <th>id</th>
                            <th>Nombre</th>
                            <th>telefono</th>
                            <th>correo</th>
                        </thead>
                        <tbody>
                            @foreach($users as $user)

                            <tr>
                                 <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->telefono }}</td>
                                <td>{{ $user->email }}</td>
                                <td>

                                    <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-primary">
                                        <span class="glyphicon glyphcon-remove-circle" aria-hidden="true">
                                             editar
                                        </span>
                                    </a>

                                <a href="{{ route('admin.users.destroy', $user->id) }}" class="btn btn-danger">
                                    <span class="glyphicon glyphcon-remove-circle" aria-hidden="true">
                                         eliminar
                                    </span>
                                </a>
                            </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {!! $users->render() !!}
                </div>

            </div>
        </div>
    </div>
</div>
@endsection