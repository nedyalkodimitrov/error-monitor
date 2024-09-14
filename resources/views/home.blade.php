@extends('layouts.app')

@section('content')
    <style>
        .app-container__versions {

        }

        .green {
            background-color: rgba(0, 128, 0, 0.42);
        }
    </style>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>
                    <div class="card-body">
                        <div class="row align-content-center"><p class="col"><b>App Name</b></p>
                            <p class="col p-0 m-0"><b>Technology</b></p>
                            <p class="col"><b>App Version</b></p>
                            <span class="col-2"><b>Action</b></span>

                        </div>
                        <hr class="m-0 p-0 mb-3">
                        @foreach($apps as $app)
                            <div class="app-container row align-content-center"><p class="col">{{$app->name}}</p>
                                <p class="col p-0 m-0">{{$app->technology}}</p>
                                <p class="col">{{$app->technology_version}}</p>
                                <span class="col-2"><i class="fa-solid fa-chevron-down"></i></span>
                                @php
                                    $version = 1;
                                @endphp
                                @foreach($app->versions()->orderBy("created_at", "DESC")->get() as $appVersion)

                                    <div class="ml-4 col-12 app-container__versions @if($version == 1) green @endif"
                                         style="padding-left: 4em">
                                        <p><i> {{$appVersion->version}}</i></p>
                                    </div>
                                    <hr class="col-11 mt-1 mx-auto">

                                @endforeach
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
