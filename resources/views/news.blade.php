@extends('layouts/application')

@section('title', 'Noticias')

@section('body')
    <div class="container" id="cont3">
        <section class="ptb-0">
            <div class="container">
                <a class="mt-10" href="/"><i class="fa fa-home"></i> Inicio<i class="mlr-10 ion-chevron-right"></i></a>
                <!-- añadir breadcrumbs y links -->
            </div>
        </section>
        <hr width="85%"/>
        <section>
            <div class="container">
                <h3>Noticias</h3>

                <!-- TODO: css -->
                <br><br>

                <div class="row">
                    @foreach ($activities as $activity)
                        <div class="col-12">
                            <div class="card">
                                @if ($activity->image)
                                    <img src="{{ asset("storage/$activity->image") }}" class="card-img-top"
                                         alt="{{ $activity->name }}">
                                @endif
                                <div class="card-body">
                                    <p class="card-text">{{ $activity->name }}</p>
                                </div>
                            </div>
                            <hr>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
@endsection
