@extends('layout.dokumentasi')

<div class="container mt-5">
    <h3>caripelanggan</h3>
    <span class="badge badge-info">API Version 1.0</span>
    <hr>
    <div class="deskripsi">
        <p>Api digunakan untuk mencari nama pelanggan yang diinginkan</p>
    </div>
    <div class="url">
        <h5>Alamat URL</h5>
      http://api-pembukuan-galih.herokuapp.com/api/caripelanggan
    </div>
    <div class="parameter mt-3"> <h5>Parameter</h5> </div>
    <div class="table-parameter">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Parameter</th>
      <th scope="col">Deskripsi</th>
      <th scope="col">Type</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>search</th>
      <td>Untuk mendapatkan nama pelanggan yang dicari, misalkan Galih Wicaksono</td>
      <td>String</td>
    </tr>

  </tbody>
</table>
    </div>
    <div class="contoh mt-4">
        <h5>Contoh 1</h5>
             <table class="table">
 
  <tbody>
    <tr>
     <td><b>GET </b></td>
      <td>http://api-pembukuan-galih.herokuapp.com/api/caripelanggan?search=Galih </td>
    </tr>

  </tbody>
</table>
    </div>

    <div class="deskripsi-res mt-4">
        <h5>Deskripsi</h5>
         <pre class="mt-3"><code>Dapat mencari semua pelanggan yang tersedia didatabase </code> </pre>
    </div>
    <div class="respon mt-4 ">
        <h5>Respon</h5>
        <div class="card bg-light mb-3 " >
  
  <div class="card-body">
     <pre ><code> 
{
    "status": 200,
    "message": "Data berhasil ditemukan",
    "data": [
        {
            "id_pelanggan": 3,
            "nama_pelanggan": "Galih Wicaksono H.M",
            "total_bulan": 10,
            "created_at": "2022-10-08 11:51:03",
            "updated_at": "2022-10-08 11:51:35"
        }
    ]
} </code> </pre>
</div>
</div>
       
    </div>

    <div class="respon-404 mt-4">
        <h5>Respon data tidak ditemukan</h5>
         <div class="card bg-light mb-3 " >
  
  <div class="card-body">
         <pre> <code> 
{
    "status": 404,
    "message": "Data tidak ditemukan"
} </code> </pre>
    </div>
        </div>
</div>

<div class="button text-right">
    <a href="{{ url('dokumentasi') }}" class="btn btn-primary mb-4">Kembali</a>
</div>
</div>

