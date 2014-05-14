@extends('plantilla_background')
@section('content')

{{--
-Servei info // Berta
    - títol
    - descripció
    - imatge
    - punts en temps 
    - avauluació
    - comentaris
    - horari disponible
    - període de de temps
    - direcció (població i codi postal)
    - OPCIONAL: mapa de la direcció(google maps)
    - sol·licitar
--}}

    <div id="content-central" class="container">

        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <h1 >Servei de prova</h1>
                        <h3><small>Categoria1 | Categoria2 | Categoria3</small></h3>
                    
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-8 portfolio-item">
                    <div id="slider_serveis"><img class="img-responsive" src="http://placehold.it/700x400"></div>
                </div>
                <div class="col-md-4 portfolio-item">
                    <div class="thumbnail-servei-lateral"><img class="img-responsive" src="http://placehold.it/700x400"></div>
                    <div class="thumbnail-servei-lateral"><img class="img-responsive" src="http://placehold.it/700x400"></div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                    <div class="col-md-4 portfolio-item">
                        <div class="thumbnail-servei-lateral">
                            <h3>Info</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin at turpis vel quam condimentum auctor. Nulla adipiscing urna ultricies quam pellentesque gravida. Nunc non aliquet sem. Praesent consectetur nisi in justo eleifend, vitae dapibus justo euismod. Integer in lorem ultricies, porta odio et, egestas libero. Quisque sapien nunc, vehicula sed suscipit vel, pretium eu neque. Vivamus eget quam faucibus, aliquet ante eu, porttitor ligula.
Phasellus blandit ante sit amet eros dapibus, sit amet sollicitudin mauris consectetur. Aliquam mollis feugiat sollicitudin. Ut leo elit, varius in condimentum vitae, tincidunt at mi. Proin in ultricies dui. Sed augue nisi, euismod vitae congue quis, luctus et lorem. Quisque tortor diam, semper sed lacinia a, semper hendrerit dolor. Sed porttitor semper mauris, id rhoncus dolor vestibulum eu.</p>
                        </div>
                    </div>
            </div>
        </div>
    </div>

    <div class="container">

        <hr>

        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Company 2013</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- JavaScript -->
    {{ HTML::script("../app/views/js/jquery-1.10.2.js") }}
    {{ HTML::script("../app/views/js/bootstrap.js") }}

@stop