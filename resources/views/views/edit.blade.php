@extends('layout/main')

@section('title','Ubah data')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Ubah Data Penduduk</h1>
            
    <form method="post" action="/views/{{ $views->id }}">
    @method('patch')
    @csrf
        <div class="form-group">
            <label for="nik">Nik</label>
            <input type="text" class="form-control" id="nik" placeholder="Masukan nik" name="nik" value="{{ $views->nik }}">
        </div>
        <div class="form-group">
            <label for="nama">Mama Lengkap</label>
            <input type="text" class="form-control" id="nama" placeholder="Masukan nama" name="nama" value="{{ $views->nama }}">
        </div>
        <div class="form-group">
            <label for="rt">Rt</label>
            <input type="text" class="form-control" id="rt" placeholder="Masukan rt" name="rt" value="{{ $views->rt }}">
        </div>
        <div class="form-group">
            <label for="rw">Rw</label>
            <input type="text" class="form-control" id="rw" placeholder="Masukan rw" name="rw" value="{{ $views->rw }}">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" placeholder="Masukan alamat" name="alamat" value="{{ $views->alamat }}">
        </div>
        <div class="form-group">
            <label for="kecamatan">Kecamatan</label>
            <input type="text" class="form-control" id="Jurusan" placeholder="Masukan kecamatan" name="kecamatan" value="{{ $views->kecamatan }}">
        </div>
        <div class="form-group">
            <label for="kelurahan">Kelurahan</label>
            <input type="text" class="form-control" id="Jurusan" placeholder="Masukan kelurahan" name="kelurahan" value="{{ $views->kelurahan }}">
        </div>        
        <button type="submit" class="btn btn-primary">Ubah Data</button>
    </form>

        </div>
    </div>
</div>
@endsection
   