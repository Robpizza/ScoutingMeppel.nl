@extends('layouts.boilerplate')

@section('content')

    <div class="header-banner">
        <img src="{!! asset('images/speltakken-banners/header_banner_' . rand(1, 3) . '.jpg') !!}" alt="header-banner"
             class="w-100 h-100" style="object-fit: cover"/>
    </div>

    <div class="container pt-3">
        {!! Breadcrumbs::render(Route::currentRouteName(), $group); !!}
    </div>

    <div class="container">
        <div>
            <h2 class="pt-3 fw-bold">De {{ $group->name }}</h2>
            <div class="text-start">
                <img class="group-img" src="{{asset($group->icon)}}" alt="{{$group->slug}}"/>
            </div>
        </div>
        <section class="pt-5">
            {!! base64_decode($group->page_content) !!}
        </section>
    </div>
@endsection
