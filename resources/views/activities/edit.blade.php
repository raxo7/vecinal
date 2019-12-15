@extends('layouts/application')

@section('title', 'Editar actividad')

@section('body')
    <div class="container" id="cont3">
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
                <h3 id="tit">Editar usuario</h3>
                <form method="POST" action="/vecinos/{{ $neighbour->id }}/editar">
                    <div class="form-group">
                      <label for="rut">RUT</label>
                      <input name="rut" type="text" class="form-control form-control-sm" id="rut"
                             value="{{ $neighbour->rut }}" placeholder="Ingrese rut">
                    </div>
                    <div class="form-group">
                      <label for="nombres">Nombres</label>
                      <input name="name" type="text" class="form-control form-control-sm" id="nombres"
                             value="{{ $neighbour->name }}" placeholder="Ingrese nombres">
                    </div>
                    <div class="row">
                      <div class="col">
                        <label for="apellido-paterno">Apellido paterno</label>
                        <input name="father_last_name" type="text" class="form-control form-control-sm"
                               value="{{ $neighbour->father_last_name }}" id="apellido-paterno"
                               placeholder="Ingrese apellido paterno">
                      </div>
                      <div class="col">
                        <label for="apellido-materno">Apellido materno</label>
                        <input name="mother_last_name" type="text" class="form-control form-control-sm"
                               value="{{ $neighbour->mother_last_name }}" id="apellido-materno"
                               placeholder="Ingrese apellido materno">
                      </div>
                    </div>
                    <br>
                    <div class="row">
                      <div class="col">
                        <label for="fecha-nacimiento">Fecha de nacimiento</label>
                        <input name="birthdate" type="date" class="form-control form-control-sm"
                               value="{{ $neighbour->birthdate }}" id="fecha-nacimiento">
                      </div>
                      <div class="col">
                        <label for="sexo">Sexo</label>
                        <select name="genre_id" class="form-control form-control-sm" id="sexo">
                            <option disabled>Escoja un sexo</option>
                            @foreach ($genres as $genre)
                                <option value="{{ $genre->id }}"
                                    @if ($genre->id === $neighbour->genre_id)
                                        selected="selected"
                                    @endif
                                >{{ $genre->type }}</option>
                            @endforeach
                        </select>
                      </div>
                    </div>
                    <br>
                    <div class="row">
                      <div class="col">
                        <label for="nacionalidad">Nacionalidad</label>
                        <select name="nationality_id" class="form-control form-control-sm" id="nacionalidad">
                          <option disabled>Escoja una nacionalidad</option>
                          @foreach ($nationalities as $nationality)
                              <option value="{{ $nationality->id }}"
                                      @if ($nationality->id === $neighbour->nationality_id)
                                        selected="selected"
                                      @endif
                              >{{ $nationality->name }}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="col">
                        <label for="estado-civil">Estado civil</label>
                        <select name="marital_state_id" class="form-control form-control-sm" id="estado-civil">
                            <option disabled>Escoja un estado civil</option>
                            @foreach ($marital_states as $marital_state)
                                <option value="{{ $marital_state->id }}"
                                    @if ($marital_state->id === $neighbour->marital_state_id)
                                        selected="selected"
                                    @endif
                                >{{ $marital_state->name }}</option>
                            @endforeach
                        </select>
                      </div>
                    </div>
                    <br>
                    <hr width="75%"/>
                    <div class="row">
                      <div class="col">
                        <label for="ciudad">Ciudad</label>
                        <select name="city_id" class="form-control form-control-sm" id="Ciudad">
                            <option disabled>Escoja una ciudad</option>
                            @foreach ($cities as $city)
                                <option value="{{ $city->id }}"
                                    @if ($city->id === $neighbour->city_id)
                                        selected="selected"
                                    @endif
                                >{{ $city->name }}</option>
                            @endforeach
                        </select>
                      </div>
                      <div class="col">
                        <label for="poblacion">Población</label>
                        <select name="village_id" class="form-control form-control-sm" id="poblacion">
                            <option disabled>Escoja una población</option>
                            @foreach ($villages as $village)
                                <option value="{{ $village->id }}"
                                    @if ($village->id === $neighbour->village_id)
                                        selected="selected"
                                    @endif
                                >{{ $village->name }}</option>
                            @endforeach
                        </select>
                      </div>
                    </div>
                    <br>
                    <div class="row">
                      <div class="col">
                        <label for="calle">Calle</label>
                        <input name="street_name" type="text" class="form-control form-control-sm" id="calle"
                               value="{{ $neighbour->street_name }}" placeholder="Ingrese su calle">
                      </div>
                      <div class="col">
                        <label for="numero">Número</label>
                        <input name="street_number" type="text" class="form-control form-control-sm" id="numero"
                               value="{{ $neighbour->street_number }}" placeholder="Ingrese número">
                      </div>
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
