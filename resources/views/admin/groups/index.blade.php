@extends('layouts.admin')
@section('content')

    <nav class="navbar navbar-dark bg-success">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Speltakken</a>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="row">
            @foreach($groups as $group)
                <div class="col-3">
                    <div class="card w-100 p-2 mt-3">
                        <div class="p-3">
                            <img src="{{ $group->icon }}" class="card-img-top" alt="{{ $group->slug }}">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $group->name }}</h5>
                        </div>
                        <ul class="list-group list-group-flush">

                            <li class="list-group-item">
                                Pagina compleet?
                                @if($group->page_content !== null)
                                    <span class="float-end text-success">
                                        <i class="fas fa-check-circle"></i>
                                    </span>
                                @else
                                    <span class="float-end text-danger">
                                        <i class="fas fa-times-circle"></i>
                                    </span>
                                @endif
                            </li>
                        </ul>
                        <div class="card-body">
                            <button type="button" class="card-link btn btn-link" data-group-id="{{ $group->id }}" onclick="test(this)">
                                Aanpassen
                            </button>
                            <a href="#" class="card-link text-danger float-end"><i class="fas fa-trash"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.tiny.cloud/1/1ggt4clihma2j90479sbj88adhiknn95j2td90d4k13wol68/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        function test(obj) {
            $.get(`/admin/groups/${$(obj).data('group-id')}/edit`, function (data) {
                let modalWrapper = $("#exampleModalContent")
                if(modalWrapper.children().length >= 3) {
                    modalWrapper.empty()
                }
                modalWrapper.append($.parseHTML(data))


                tinymce.init({
                    selector:'textarea.page_content',
                    browser_spellcheck: true,
                    plugins: 'autoresize autolink lists media table ',
                    // toolbar: 'addcomment showcomments code table',
                    // toolbar_mode: 'floating',
                });
                $('.modal').modal('show');
            });
        }
    </script>
@endsection
