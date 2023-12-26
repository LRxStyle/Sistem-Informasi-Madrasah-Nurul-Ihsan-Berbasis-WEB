@extends('layouts.app')

@section('title', 'Data Slider')

@section('content')
    
<div class="container">
    <a href="/Sliders/create" class="btn btn-primary mb-3">Tambah Data</a>
    <table class="table table-bordered table-hover table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Gambar</th>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
</div>

@endsection