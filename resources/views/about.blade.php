@extends('layouts/application')

@section('title', 'Acerca de')

@section('body')
    <div class="container" id="cont3">
        <section class="ptb-0">
            <div class="container">
                <a class="mt-10" href="/"><i class="fa fa-home"></i> Inicio<i class="mlr-10 ion-chevron-right"></i></a>
                <a class="mt-10" href="/acerca-de"><i class="fa fa-group"></i> Acerca de</a>
            </div><!-- container -->
        </section>
        <hr width="85%"/>
        <section >
            <div class="container" >
                <div class="row">
                    <div class="col-md-12 col-lg-8" id="contabout">
                        <h4 class="p-title"><b>Nosotros</b></h4>
                        <div class="row">
                            <p class="caja">Somos un par de estudiantes de la carrera ingenieria en informatica en la universidad tecnologica de
                                Chile(INACAP) preparandose para presentar su tesis a traves de esta plataforma, con esta página buscamos mejorar la
                                organización y el orden en las juntas vecinales, gracias por su visita.</p>

                        </div><!-- row -->
                    </div><!-- col-md-9 -->

                    <div class="col-sm-12 col-md-4">
                        <h3 class="p-title"><b>INFORMATION</b></h3>

                        <ul class="font-11 list-relative list-li-pl-30 list-block list-li-mb-15">
                            <li><i class="abs-tl ion-person"></i>Sergio Augusto Navarro Romero<br>Oscar Andres Gallardo López</li>
                            <li><i class="abs-tl ion-android-mail"></i>junta.app@gmail.com</li>
                            <li><i class="abs-tl ion-android-call"></i>(+12)-345-678-910</li>
                        </ul>
                        <ul class="font-11  list-a-plr-10 list-a-plr-sm-5 list-a-ptb-15 list-a-ptb-sm-5">
                            <li><h5>¡Sigenos en nuestras redes sociales!</h5></li><br>
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-google"></i></a></li>
                            <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
