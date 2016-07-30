<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>QTF</title>
    {!! Html::style('assets/css/bootstrap.css') !!}
    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

    


    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" 
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                
                <ul class="nav navbar-nav navbar-left">
                    @if (Auth::guest())
                        <li><a href="{{route('auth/login')}}">Iniciar sesion</a></li>
                        <li><a href="{{route('auth/register')}}">Registrate</a></li>
                    @else
                        <li>
                            <div class="btn-group">
                                <button class="btn">Usuario</button>
                                <button class="btn dropdown-toggle" data-toggle="dropdown">
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li>
                                         <a href="{{route('admin.users.create')}}">crear</a>
                                    </li>
                                    <li>
                                        <a href="{{route('admin.users.index')}}">listar</a>
                                    </li>
                                    <li>
                                        <a href="{{route('admin.users.show',Auth::user()->id)}}">editar tu perfil</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li>
                            <div class="btn-group">
                                <button class="btn">Evento</button>
                                <button class="btn dropdown-toggle" data-toggle="dropdown">
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                   <li>
                                         <a href="{{route('admin.evento.create')}}">crear</a>
                                    </li>
                                    <li>
                                        <a href="{{route('admin.evento.index',Auth::user()->id)}}">listar</a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </li>

                        <li>
                            <div class="btn-group">
                                <button class="btn">Categorias</button>
                                <button class="btn dropdown-toggle" data-toggle="dropdown">
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                   <li>
                                         <a href="{{route('admin.categorias.create')}}">crear</a>
                                    </li>
                                    <li>
                                        <a href="{{route('admin.categorias.index')}}">listar</a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </li>

                        <li>
                            <a href="{{route('auth/logout')}}">Cerrar sesion</a>
                        </li>
                        
                         
                    @endif
                </ul>
            </div>
        </div>
    </nav>

        






    <div class="container">
        @if (Session::has('errors'))
        <div class="alert alert-warning" role="alert">
            <ul>
                <strong>Oops! Something went wrong : </strong>
                    @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
    @yield('content')
    <!-- Scripts -->
    {!! Html::script('assets/js/jquery.js') !!}
    {!! Html::script('assets/js/bootstrap.min.js') !!}
</body>
</html>