@extends('layouts.boilerplate')

@section('content')
    <div class="header-banner">
        <img src="{!! asset('images/speltakken-banners/header_banner_' . rand(1, 3) . '.jpg') !!}" alt="header-banner" class="w-100 h-100" style="object-fit: cover"/>
    </div>

    <div class="container pt-3">
        {!! Breadcrumbs::render(Route::currentRouteName()); !!}
    </div>

    <div class="container">
        <div class="row mt-4">
            @if(sizeof($documents) == 0)
                <div class="col-5">
                    <h3 class="text-danger">Geen documenten gevonden!</h3>
                </div>
            @else
                @foreach($documents as $document)
                    <div class="col-4">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-8">
                                        <b>{{ $document->name }}</b>
                                    </div>
                                    <div class="col-4 text-end">
                                        <span class="badge rounded-pill bg-info text-dark text-end">{{ $document->type }}</span>
                                        <span class="badge rounded-pill bg-info text-dark text-end">{{ $document->size }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="card-text text-center">
                                    <a href="{{asset($document->path)}}" class="btn btn-primary">DOWNLOAD</a>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection
