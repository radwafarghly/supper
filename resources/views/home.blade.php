@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>

<ul class="list-inline">
        @foreach($user->getMedia($user->galleryMediaCollection) as $media)
            <li class="gallery-item text-center list-inline-item" style="width: 48%">
                @if($media->getCustomProperty('featured', false))
                    <span class="featured-item"><i class="fa fa-fw fa-2x fa-star"></i></span>
                @endif
                <a href="{{ $media->getUrl() }}" data-lightbox="user-gallery">
                    <img src="{{ $media->getUrl() }}" class="img-responsive" alt="user Gallery Image"/></a>
                    <div class="item-buttons" style="display: none;">
                        <a href=""
                           class="btn btn-sm btn-danger item-button" title="Delete Gallery Item"
                           data-action="delete" data-page_action="reloadGallery">
                            <i class="fa fa-fw fa-remove"></i>
                        </a>
                        @if(!$media->getCustomProperty('featured', false))
                            <a href="{"
                               class="btn btn-sm btn-warning item-button"
                               title="Mark as Featured" data-action="post" data-page_action="reloadGallery">
                                <i class="fa fa-fw fa-star"></i>
                            </a>
                        @endif
                    </div>
            </li>
        @endforeach
    </ul>


 {{--{!! Form::open([ 'route' => [ 'gallery.upload' ], 'files' => true, 'enctype' => 'multipart/form-data',  'id' => 'image-upload' ]) !!}
            <div>
                <h3>Upload Multiple Image By Click On Box</h3>
        <input type="file"name='file'>
<button type='submit'></button>
            </div>
{!! Form::close() !!}--}}

<form action="{{ route("gallery.upload") }}" method="POST" enctype="multipart/form-data">
    @csrf

    {{-- Name/Description fields, irrelevant for this article --}}

    <div class="form-group">
        <label for="document">image</label>
        <div class="needsclick dropzone" id="document-dropzone">
        </div>
    </div>
</form>

<script>
  var uploadedDocumentMap = {}
  Dropzone.options.documentDropzone = {
    url: '{{ route('gallery.upload') }}',
    maxFilesize: 2, // MB
    acceptedFiles: 'image/*',
    dictDefaultMessage:'<button type="button" class="btn btn-default">Basic</button>',
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    addRemoveLinks:false,
    success: function(file, response)
    {
        console.log(response);
        $('#document-dropzone').html('<button type="button" class="btn btn-default">Basic</button>');
    },
  }
</script>



@endsection

