@extends('layouts.default')

@section('extra-header')
    <link rel="stylesheet" href="{{asset('css/lightbox.css')}}"/>
@endsection

@section('content')

    <div class="container-fluid">
        <div class="container">
            <h1>{{$album->name}}</h1>

            <hr/>
        </div>

        @if($album->photos)
            <div class="row row-cols-2 row-cols-md-6 row-cols- g-4" id="photoAlbum"> {{-- data-masonry='{"percentPosition": true }' --}}
                @foreach($album->photos as $photo)
                    <div class="col px-0 mt-0">
                        <div class="card h-100 zoom zoom-border">
                            <a class="card-img no-border" href="{{$photo->path}}" data-lightbox="images" data-title="{{$album->name}}">
                                <img class="card-img no-border" src="{{$photo->thumbnail()}}" alt="ALT" loading="lazy"/>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <section class="mt-4">
                <h2 class="text-danger">Geen fotos gevonden in dit album!</h2>
            </section>
        @endif
    </div>

@endsection
@section('scripts')
    <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous"></script>

    <script>
        let grid = $("#photoAlbum").masonry({
            gutter: 0,
            transitionDuration: '0.3s'
        });
        grid.imagesLoaded().progress(function () {
            grid.masonry('layout');
        })
    </script>
@endsection
