<div id="mainCarousel" class="carousel slide h-100" data-bs-ride="carousel">
    <div class="carousel-inner h-100">

        @foreach($images as $image)
            <div class="carousel-item h-100">
                <div class="banner-background d-block w-100" data-background="{!! str_replace(public_path(), '', $image) !!}"></div>
            </div>
        @endforeach
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
{{--        <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
        <i class="fas fa-chevron-circle-left h1 text-primary" aria-hidden="true"></i>
        <span class="visually-hidden">Vorige</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
{{--        <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
        <i class="fas fa-chevron-circle-right h1 text-primary" aria-hidden="true"></i>
        <span class="visually-hidden">Volgende</span>
    </button>
</div>

@section('scripts')
    <script>
        $(".banner-background").each((i, obj) => {
            let element = $(obj);

            const background = element.data('background');
            // Set the image
            element.css('background-image', `url("${background}")`);
        })

        document.querySelector('.carousel-inner > div:first-child').classList.add('active');
    </script>
@endsection
