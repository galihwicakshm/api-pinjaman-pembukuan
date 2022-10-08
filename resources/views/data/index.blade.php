@extends('layout.layout');

@section('title')
    Data Pelanggan
@endsection

@section('content')
        <div class="card">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Pelanggan</th>
      <th scope="col">Total Bulan</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        @php
            $no = 2;
        @endphp
        @forelse ($data as $pelanggan)
      <th scope="row">{{ $no++ }}</th>
      <td>{{ $pelanggan->nama_pelanggan }}</td>
      <td>{{ $pelanggan->total_bulan }}</td>
      <td><a href="" class="btn btn-primary">Detail</a></td>
    </tr>
        @empty
            
        @endforelse
     
   
  </tbody>
</table>
  </div>
</div>
@endsection