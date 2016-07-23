@extends('layout/layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="jumbotron text-center">
                    <h2 class="panel-heading">Agregar Contacto</h2>
                </div>
            </div>
            <div class="container">
                <div class="container">
                    <div class="row stylish-panel">
                        <div class="col-md-3">
                            <div>
                                <img style='width:250px' src="img/DaisyRidley.jpg" alt="Texto Alternativo" class="img-circle img-thumbnail">
                                <h1>Daisy Ridley</h1>
                                <h2>Jedi</h2>
                                <p>Piloto del Millenium Falcon.
                                </p>
                                <a href="#" class="btn btn-primary" title="See more">Mas Informacion <i class='fa fa-arrow-right'></i></a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div>
                                <img style='width:250px' src="img/kaleycuoco.jpg" alt="Texto Alternativo" class="img-circle img-thumbnail">
                                <h1>Kaley Cuoco</h1>
                                <h2>Hechicera</h2>
                                <p>Heredera del Poder de la Triada.
                                </p>
                                <a href="#" class="btn btn-primary" title="See more">Mas Informacion <i class='fa fa-arrow-right'></i></a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div>
                                <img style='width:250px' src="img/crystal.jpg" alt="Texto Alternativo" class="img-circle img-thumbnail">
                                <h1>Crystal Reed</h1>
                                <h2>Cazadora de Hombres Lobo</h2>
                                <p>Ultima Decendiente de la Familia Argent.
                                </p>
                                <a href="#" class="btn btn-primary" title="See more">Mas Informacion <i class='fa fa-arrow-right'></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection