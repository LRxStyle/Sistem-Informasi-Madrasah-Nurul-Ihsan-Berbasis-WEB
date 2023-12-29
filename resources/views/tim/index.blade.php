@extends('layouts.app')

@section('title', 'Data Tim')

@section('content')
    
<div class="container">
    <a href="/admin/tims/create" class="btn btn-primary mb-3">Tambah Data</a>
    
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
                    <th>Nama</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1
                @endphp
                @foreach ($tims as $tim)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{$tim->title}}</td>
                        <td>{{$tim->description}}</td>
                        <td style="width: 40%;">
                            <img src="/image/{{$tim->image}}" alt="" class="img-fluid" width="40%">
                        </td>
                        <td>
                            <a href="{{route('tims.edit', $tim->id)}}" class="btn btn-warning">Edit</a>

                            <form action="{{route('tims.destroy', $tim->id)}}" method="POST">
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