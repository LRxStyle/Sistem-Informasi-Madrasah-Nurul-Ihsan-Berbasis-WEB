@extends('layouts.app')

@section('title', 'Data Tentang')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if ($message = Session::get('message'))
                <div class="alert alert-success">
                    <strong>Berhasil</strong>
                    <p>{{$message}}</p>
                </div>
            @endif
            <form action="/admin/tentangs/{{ $tentang->id }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" class="form-control" name="judul" placeholder="Judul" value="{{ $tentang->judul }}">
                </div>
                @error('judul')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Subjudul</label>
                    <textarea name="subjudul" id="" cols="30" rows="5" class="form-control" placeholder="Subjudul">{{ $tentang->subjudul }}</textarea>
                </div>
                @error('subjudul')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Deskripsi 1</label>
                    <textarea name="deskripsi_1" id="" cols="30" rows="10" class="form-control" placeholder="Deskripsi 1">{{ $tentang->deskripsi_1 }}</textarea>
                </div>
                @error('deskripsi_1')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Deskripsi 2</label>
                    <textarea name="deskripsi_2" id="" cols="30" rows="10" class="form-control" placeholder="Deskripsi 2">{{ $tentang->deskripsi_2 }}</textarea>
                </div>
                @error('deskripsi_1')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Kelebihan 1</label>
                    <input type="text" class="form-control" name="kelebihan_1" placeholder="Kelebihan 1" value="{{ $tentang->kelebihan_1 }}">
                </div>
                @error('kelebihan_1')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Kelebihan 2</label>
                    <input type="text" class="form-control" name="kelebihan_2" placeholder="Kelebihan 2" value="{{ $tentang->kelebihan_1 }}">
                </div>
                @error('kelebihan_2')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Kelebihan 3</label>
                    <input type="text" class="form-control" name="kelebihan_3" placeholder="Kelebihan 3" value="{{ $tentang->kelebihan_1 }}">
                </div>
                @error('kelebihan_3')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Kelebihan 4</label>
                    <input type="text" class="form-control" name="kelebihan_4" placeholder="Kelebihan 4" value="{{ $tentang->kelebihan_1 }}">
                </div>
                @error('kelebihan_4')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
