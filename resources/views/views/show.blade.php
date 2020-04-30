@extends('layout/main')

@section('title','Detail Penduduk')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Detail Penduduk</h1>
            <div class="row no-gutters">
              
            <div class="card text-white bg-secondary mb-3" style="max-width: 540px;">
            
            <div class="card-header">Detail</div>
            <div class="row no-gutters">
            <div class="col-md-4">
            </div>
              
              <div class="col-md-8">
                
                <div class="card-body">
            
              <h4 class="card-title"><b>{{ $views->nik }}</b></h4>
              <p class="card-text">{{ $views->nama }}</p>
              <p class="card-text">{{ $views->alamat }}</p>
              <p class="card-text">{{ $views->rt }}</p>
              <p class="card-text">{{ $views->rw }}</p>
              <p class="card-text">{{ $views->kecamatan }}</p>
              <p class="card-text">{{ $views->kelurahan }}</p>
              
              <a href="{{ $views->id }}/edit" class="btn btn-primary">Edit</a>
              
              <form action="{{ $views->id }}" method="post" class="d-inline">
              @method('delete')
              @csrf
                <button type="submit" class="btn btn-danger">Delete</button>
              </form>
              <a href="/views" class="card-link"><b>Back<<</b></a>
            </div>
          </div>

        </div>
    </div>
</div>
@endsection
   