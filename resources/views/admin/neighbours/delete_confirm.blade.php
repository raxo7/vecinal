@extends('layouts.application')

@section('title', 'Confirmar eliminación')

@section('body')
    <div class="container" id="neighbours-delete-confirm-container">
        <section class="ptb-0">
            <div class="container">
                <a class="mt-10" href="/"><i class="fa fa-home"></i> Inicio<i class="mlr-10 ion-chevron-right"></i></a>
                <!-- añadir breadcrumbs y links -->
            </div>
        </section>
        <hr width="85%"/>
        <section >
            <div class="container">
                <h3>Confirmar eliminación</h3>

                <!-- TODO: css -->
                <br><br>

                <p>
                    Se va a eliminar el/la vecino/a {{ $neighbour->name }} {{ $neighbour->father_last_name }}
                    {{ $neighbour->mother_last_name }}, ¿está seguro que desea continuar?
                </p>

                <!-- TODO: css -->
                <br><br>

                <div class="row">
                    <div class="col-3">
                        <a href="/admin/vecinos" class="btn btn-outline-primary form-control">
                            No
                        </a>
                    </div>
                    <div class="col-3 offset-6">
                        <form action="/admin/vecinos/{{ $neighbour->id }}/eliminar" method="post">
                            @csrf
                            <button type="submit" class="btn btn-danger form-control">
                                Si
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
