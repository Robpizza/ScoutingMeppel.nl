<div class="modal-header">
    <h5 class="modal-title">{{ $group->name }}</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
    <form id="page_content_form" method="post" action='/admin/groups/{{ $group->id }}'>
        @csrf
        @method('PUT')
        <textarea class="page_content" name="page_content">{{ base64_decode($group->page_content) }}</textarea>
    </form>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-primary" form="page_content_form">Save changes</button>
</div>
