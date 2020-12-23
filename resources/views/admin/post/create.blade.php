@extends('template_backend.home')
@section('sub-judul', 'Tambah Kategori')
@section('content')

@if(count($errors)>0)
    @foreach($errors->all() as $error)
    <div class="alert alert-danger" role="alert">
    {{ $error }}
    </div>
    @endforeach
@endif

@if(Session::has('success'))
    <div class="alert alert-success" role="alert">
    {{ Session('success') }}
    </div>
@endif

<form action="{{ route('post.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label>Judul</label>
        <input type="text" class="form-control" multiple name="judul">
    </div>
    <div class="form-group">
        <label>Kategori</label>
        <select name="category_id" class="form-control">
            <option value="" holder>Pilih Kategori</option>
            @foreach($category as $result )
            <option value="{{ $result->id }}">{{ $result->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label>Pilih Tags</label>
        <select class="form-control select2" multiple="" name="tags[]">
            @foreach ($tags as $tag)
            <option value="{{ $tag->id}}">{{ $tag->name}}</option>    
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label>Konten</label>
        <textarea type="text" class="form-control" name="content" id="content"></textarea>
    </div>
    <div class="form-group">
        <label>Thumbnail</label>
        <input type="file" class="form-control" name="gambar">
    </div>
    <div class="form-group">
        <button class="btn btn-primary btn-block">Simpan Post</button>
    </div>
</form>

<script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
<script>
    // Replace the <textarea id="editor1"> with a CKEditor 4
    // instance, using default configuration.
    CKEDITOR.replace('content' );
</script>
@endsection