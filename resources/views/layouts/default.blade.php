@extends('layouts.boilerplate')

@section('header-banner')
    <div class="header-banner">
        <img src="{!! asset('images/speltakken-banners/header_banner_' . rand(1, 3) . '.jpg') !!}" alt="header-banner" class="w-100 h-100" style="object-fit: cover"/>
    </div>
@endsection

@section('breadcrumbs')
    <div class="container pt-3">
        {!! Breadcrumbs::render(Route::currentRouteName()); !!}
    </div>
@endsection
