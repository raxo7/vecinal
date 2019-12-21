@extends('layouts.application')

@section('title', 'Inicio')

@section('body')
    <div class="container" id="index-container">
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
                                <a href="/admin/vecinos">
                                    <p>
                                        <i class="fa fa-users" aria-hidden="true"></i>
                                    </p>
                                    <p>Listado de vecinos</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <a href="/admin/vecinos/nuevo">
                                    <p>
                                        <i class="fa fa-user-plus" aria-hidden="true"></i>
                                    </p>
                                    <p>Añadir vecino</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <a href="/admin/actividades">
                                    <p>
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                    </p>
                                    <p>Listado de actividades</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <a href="/admin/actividades/nueva">
                                    <p>
                                        <i class="fa fa-calendar-plus-o" aria-hidden="true"></i>
                                    </p>
                                    <p>Añadir actividad</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <a href="/admin/boletas">
                                    <p>
                                        <i class="fa fa-files-o" aria-hidden="true"></i>
                                    </p>
                                    <p>Listado de boletas</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <a href="/admin/boletas/nueva">
                                    <p>
                                        <i class="fa fa-dollar" aria-hidden="true"></i>
                                    </p>
                                    <p>Añadir boleta</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
