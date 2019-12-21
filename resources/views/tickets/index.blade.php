@extends('layouts/application')

@section('title', 'Boletas')

@section('body')
    <div class="container" id="tickets-container">
        <section class="ptb-0">
            <div class="container">
                <a class="mt-10" href="/"><i class="fa fa-home"></i> Inicio<i class="mlr-10 ion-chevron-right"></i></a>
                <!-- añadir breadcrumbs y links -->
            </div>
        </section>
        <hr width="85%"/>
        <section>
            <div class="container">
                @if (session('create'))
                    <div class="alert alert-success">
                        Boleta añadida correctamente
                    </div>
                @endif

                @if (session('edit'))
                    <div class="alert alert-success">
                        Boleta {{ session('edit') }} fue modificada correctamente
                    </div>
                @endif

                @if (session('delete'))
                    <div class="alert alert-success">
                        La boleta {{ session('delete') }} fue eliminada correctamente
                    </div>
                @endif

                <div class="title">
                    <h3>Listado de boletas</h3>

                    @auth ('admin')
                        <a href="/admin/boletas/nueva" class="btn btn-primary">
                            Nuevo
                            <i class="fa fa-plus" aria-hidden="true"></i>
                        </a>
                    @endauth
                </div>

                <table class="table">
                    <thead>
                        <tr>
                            <th>Descripción</th>
                            <th>Monto</th>
                            @auth ('admin')
                                <th>Acciones</th>
                            @endauth
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tickets as $ticket)
                            <tr>
                                <td>{{ $ticket->description }}</td>
                                <td>$ {{ $ticket->amount }}</td>
                                @auth ('admin')
                                    <td>
                                        <div class="btn-group btn-group-sm" role="group">
                                            <a href="/admin/boletas/{{ $ticket->id }}/editar" class="btn btn-primary">
                                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                            </a>
                                            <a href="/admin/boletas/{{ $ticket->id }}/eliminar" class="btn btn-primary">
                                                <i class="fa fa-times" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </td>
                                @endauth
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>
    </div>
@endsection
