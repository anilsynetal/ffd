<div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">{{ $blog->title }}</h5>
</div>
<div class="modal-body">
    <div class="mb-3">
        <strong>Category:</strong> {{ $blog->category->name ?? '-' }}
    </div>
    <div class="mb-3">
        @if ($blog->image)
            <img src="{{ asset($blog->image) }}" alt="{{ $blog->title }}" class="img-fluid" style="max-height:300px;">
        @else
            <img src="{{ asset('website/assets/images/no-image.png') }}" alt="No Image" class="img-fluid"
                style="max-height:300px;">
        @endif
    </div>
    <div class="mb-3">
        <strong>Description:</strong>
        <div>{!! $blog->description !!}</div>
    </div>
    {{-- <div class="mb-3 text-muted">
        <small>Published on: {{ $blog->created_at->format('l d, Y') }}</small>
    </div> --}}
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">@lang('translation.Close')</button>
</div>
