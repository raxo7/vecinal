@extends('layouts.application')

@section('title', 'Actividades')

@section('body')
    <div class="container" id="activities-index-container">
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
                @if (session('create'))
                    <div class="alert alert-success">
                        Actividad añadida correctamente
                    </div>
                @endif

                @if (session('edit'))
                    <div class="alert alert-success">
                        La actividad {{ session('edit') }} fue modificada correctamente
                    </div>
                @endif

                @if (session('delete'))
                    <div class="alert alert-success">
                        La actividad {{ session('delete') }} fue eliminada correctamente
                    </div>
                @endif

                <div class="title">
                    <h3>Listado de actividades</h3>

                    <a href="/admin/actividades/nueva" class="btn btn-primary">
                        Nueva
                        <i class="fa fa-plus" aria-hidden="true"></i>
                    </a>
                </div>

                <table class="table">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Sub título</th>
                            <th>Tipo</th>
                            <th>Fecha</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($activities as $activity)
                            <tr>
                                <td>{{ $activity->name }}</td>
                                <td>{{ $activity->sub_title }}</td>
                                <td>{{ $activity->type_name }}</td>
                                <td>{{ $activity->activity_date }}</td>
                                <td>
                                    <div class="btn-group btn-group-sm" role="group">
                                        <a href="/admin/actividades/{{ $activity->id }}/editar" class="btn btn-primary">
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        </a>
                                        <a href="/admin/actividades/{{ $activity->id }}/eliminar" class="btn btn-primary">
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
