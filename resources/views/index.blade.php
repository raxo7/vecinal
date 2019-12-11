@extends('layouts/application')

@section('title', 'Inicio')

@section('body')
    <div class="container" id="cont3">
        <section class="ptb-0">
            <div class="container">
                <a class="mt-10" href="/"><i class="fa fa-home"></i> Inicio<i class="mlr-10 ion-chevron-right"></i></a>
            </div>
        </section>
        <hr width="85%"/>
        <section id="dashboard">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <a href="/vecinos/nuevo">
                                    <p>
                                        <i class="fa fa-user-plus" aria-hidden="true"></i>
                                    </p>
                                    <p>Añadir vecino</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
