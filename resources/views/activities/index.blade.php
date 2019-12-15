@extends('layouts/application')

@section('title', 'Actividades')

@section('body')
    <div class="container" id="cont3">
        <section class="ptb-0">
            <div class="container">
                <!-- TODO: breadcrumb -->
                <a class="mt-10" href="/"><i class="fa fa-home"></i> Inicio<i class="mlr-10 ion-chevron-right"></i></a>
                <!-- añadir breadcrumbs y links -->
            </div>
        </section>
        <hr width="85%"/>
        <section>
            <div class="container">
                <!--
                @if (session('edit'))
                    <div class="alert alert-success">
                        El/la vecino/a {{ session('delete') }} fue modificado/a correctamente
                    </div>
                @endif

                @if (session('delete'))
                    <div class="alert alert-success">
                        El/la vecino/a {{ session('delete') }} fue eliminado/a correctamente
                    </div>
                @endif
                    -->

                <h3>Listado de actividades</h3>
                <!-- TODO: limpiar -->
                <br><br>

                <table class="table">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Sub título</th>
                            <th>Tipo</th>
                            <th>Fecha de creación</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($activities as $activity)
                            <tr>
                                <td>{{ $activity->name }}</td>
                                <td>{{ $activity->sub_title }}</td>
                                <td>{{ $activity->type_name }}</td>
                                <td>{{ $activity->created_at }}</td>
                                <td>
                                    <div class="btn-group btn-group-sm" role="group">
                                        <a href="/actividades/{{ $activity->id }}/editar" class="btn btn-primary">
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        </a>
                                        <a href="/actividades/{{ $activity->id }}/eliminar" class="btn btn-primary">
                                            <i class="fa fa-times" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>
    </div>
@endsection
