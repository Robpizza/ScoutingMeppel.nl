@extends('layouts.default')

@section('content')
    <div class="container">
        <h1>Fotos</h1>
        <hr/>
        <section class="mt-4">
            <div class="row">

                @foreach($albums as $album)
                    <div class="col-12 col-sm-6 col-xl-4">
                        <div class="card mb-3 zoom" data-album-id="{{$album->id}}" onclick="openAlbum(this)">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    @if(sizeof($album->photos) > 0)
                                    <img class="card-img-2 h-100 w-100" src="{{ $album->photos->first()->path }}" alt="{{$album->name}}"/>
                                    @else
                                        <img class="card-img-2 h-100 w-100" src="https://i.stack.imgur.com/y9DpT.jpg" alt="No image found"/>
                                    @endif
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$album->name}}</h5>
                                        <p class="card-text">Album beschrijving...</p>
                                        <p class="card-text"><small class="text-muted">Geüpload op: {{ \Carbon\Carbon::parse($album->created_at)->format('d-m-Y')}}</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </div>
@endsection

@section('scripts')
    <script>
        function openAlbum(obj) {
            let elem = $(obj);

            window.location.href = `/scouting-meppel/fotos/${elem.data('album-id')}`
        }
    </script>
@endsection
