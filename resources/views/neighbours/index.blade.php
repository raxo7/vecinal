@extends('layouts/application')

@section('title', 'Vecinos')

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
                @if (session('create'))
                    <div class="alert alert-success">
                        Vecino/a añadido/a correctamente
                    </div>
                @endif

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

                <h3>Listado de vecinos</h3>
                <!-- TODO: limpiar -->
                <br><br>

                <table class="table">
                    <thead>
                        <tr>
                            <th>Nombres</th>
                            <th>Apellido paterno</th>
                            <th>Apellido materno</th>
                            <th>RUT</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($neighbours as $neighbour)
                            <tr>
                                <td>{{ $neighbour->name }}</td>
                                <td>{{ $neighbour->father_last_name }}</td>
                                <td>{{ $neighbour->mother_last_name }}</td>
                                <td>{{ $neighbour->rut }}</td>
                                <td>
                                    <div class="btn-group btn-group-sm" role="group">
                                        <a href="/vecinos/{{ $neighbour->id }}/editar" class="btn btn-primary">
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        </a>
                                        <a href="/vecinos/{{ $neighbour->id }}/eliminar" class="btn btn-primary">
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
