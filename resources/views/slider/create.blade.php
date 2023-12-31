@extends('layouts.app')

@section('title', 'Data Slider')

@section('content')
    
<div class="container">
    <a href="/admin/sliders" class="btn btn-primary mb-3">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('sliders.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" class="form-control" name="title" placeholder="Judul">
                </div>
                
                @error('title')
                    <small style="color:red"> {{$message}} </small>
                @enderror
                
                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Deskripsi"></textarea>
                </div>

                @error('description')
                    <small style="color:red"> {{$message}} </small>
                @enderror

                <label for="">Gambar</label>
                <div class="form-group" style="position: relative; border: 1px solid #ced4da;
                    overflow: hidden; display: flex; flex-direction: column; justify-content: center; align-items: center;">
                    <img id="imagePreview" src="#" alt="Preview" style="max-width:1000px; min-height:50px; display: block; margin: auto;">
                    <input type="file" class="form-control" name="image" id="imageInput" accept="image/*" style="opacity: 0; position: absolute; width: 100%; height: 55%;" onchange="previewImage()">
                    <button type="button" onclick="resetImage()">
                        Reset<img src="reset-image-url" alt="">
                    </button>
                </div>

                @error('image')
                    <small style="color:red"> {{$message}} </small>
                @enderror

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function previewImage() {
      var fileInput = document.getElementById('imageInput');
      var imgPreview = document.getElementById('imagePreview');
      imgPreview.src = URL.createObjectURL(fileInput.files[0]);
    }

    function resetImage() {
      document.getElementById('imageInput').value = '';
      document.getElementById('imagePreview').src = '';
    }
</script>

@endsection