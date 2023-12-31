@extends('layouts.app')

@section('title', 'Data Kegiatan')

@section('content')
    
<div class="container">
    <a href="/admin/kegiatans/create" class="btn btn-primary mb-3">Tambah Data</a>
    
    @if ($message = Session::get('message'))
        <div class="alert alert-success">
            <strong>Berhasil</strong>
            <p>{{$message}}</p>
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1
                @endphp
                @foreach ($kegiatans as $kegiatan)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{$kegiatan->title}}</td>
                        <td>{{$kegiatan->description}}</td>
                        <td style="width: 40%;">
                            <img src="/image/{{$kegiatan->image}}" alt="" class="img-fluid" width="40%">
                        </td>
                        <td>
                            <a href="{{route('kegiatans.edit', $kegiatan->id)}}" class="btn btn-warning">Edit</a>

                            <form action="{{route('kegiatans.destroy', $kegiatan->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection