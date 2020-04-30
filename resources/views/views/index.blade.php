@extends('layout/main')

@section('title','Data Penduduk')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-15">
            <h1 class="mt-3">Data Penduduk</h1>
            
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            
            <table class="table table-dark">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nik</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Rt</th>
                    <th scope="col">Rt</th>
                    <th scope="col">Kecamatan</th>
                    <th scope="col">Kelurahan</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>    
                <tbody>
                @foreach( $views as $views )
                    <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $views->nik }}</td>
                    <td>{{ $views->nama }}</td>
                    <td>{{ $views->alamat }}</td>
                    <td>{{ $views->rt }}</td>
                    <td>{{ $views->rw }}</td>
                    <td>{{ $views->kecamatan }}</td>
                    <td>{{ $views->kelurahan }}</td>
                    <td>
                    <a href="/views/{{ $views->id }}" class="badge badge-info">Detail</a>
                    </td>
                    </tr>
                @endforeach
                </tbody>
                </table>
            
        

            <a href="/views/create" class="btn btn-primary my-3">create</a>

        </div>
    </div>
</div>
@endsection
   