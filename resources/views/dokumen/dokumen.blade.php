@extends('layout.dokumentasi')


<div class="container mt-5">
    <h5>Dokumen API Pinjaman Uang - Galih</h5>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Data</th>
      <th scope="col">Deskripsi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><b><a href="{{ url('dokumentasi/api/pelanggan') }}">pelanggan</a></b></td>
      <td>API untuk mengambil, mengupdate, dan menghapus Pelanggan</td>
      
    </tr>
    <tr>
      <td><b><a href="{{ url('dokumentasi/api/data-pelanggan') }}">data</a></b></td>
      <td>API untuk mengambil, mengupdate, dan menghapus Data Pelanggan yang terkait</td>
      
    </tr>
    <tr>
      <td><b><a href="{{ url('dokumentasi/api/cari-pelanggan') }}">caripelanggan</a></b></td>
      <td >API untuk mencari Pelanggan berdasarkan dengan parameter yang diinput</td>
      
    </tr>
   
  </tbody>
</table>
</div>
