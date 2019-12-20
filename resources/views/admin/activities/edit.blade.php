@extends('layouts.application')

@section('title', 'Editar actividad')

@section('body')
    <div class="container" id="activities-edit-container">
        <section class="ptb-0">
            <div class="container">
                <!-- TODO: añadir breadcrumbs -->
                <a class="mt-10" href="/"><i class="fa fa-home"></i> Inicio<i class="mlr-10 ion-chevron-right"></i></a>
                <!-- añadir breadcrumbs y links -->
            </div>
        </section>
        <hr width="85%"/>
        <section >
            <div class="container">
                <h3 id="tit">Editar actividad</h3>
                <form method="POST" action="/admin/actividades/{{ $activity->id }}/editar">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input name="name" type="text" class="form-control form-control-sm" id="nombre"
                               value="{{ $activity->name }}" placeholder="Ingrese nombre">
                    </div>

                    <div class="form-group">
                        <label for="sub título">Sub título</label>
                        <input name="sub_title" type="text" class="form-control form-control-sm" id="sub título"
                               value="{{ $activity->sub_title }}" placeholder="Ingrese sub título">
                    </div>

                    <div class="form-group">
                        <label for="tipo">Tipo</label>
                        <select name="type_id" class="form-control form-control-sm" id="tipo">
                            <option disabled>Escoja un tipo</option>
                            @foreach ($types as $type)
                                <option value="{{ $type->id }}"
                                    @if ($type->id === $activity->type_id)
                                        selected="selected"
                                    @endif
                                >{{ $type->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="fecha">Fecha</label>
                        <input name="activity_date" type="datetime-local" class="form-control form-control-sm"
                               value="{{ $activity->activity_date }}" id="fecha">
                    </div>

                    <div class="form-group">
                        <label for="descripción">Descripción</label>
                        <textarea name="description" id="descripción" class="form-control" placeholder="Ingrese descripción">
                            {{ $activity->description }}
                        </textarea>
                    </div>

                    <div class="form-group">
                        <label for="imagen">Imagen</label>
                        <input name="image" type="file" id="imagen">
                    </div>

                    @csrf
                    <br>

                    <button type="button" class="btn btn-outline-primary">Cancelar</button>
                    <button type="submit" class="btn btn-primary float-right">Guardar</button>
                </form>
            </div>
        </section>
    </div>
@endsection
