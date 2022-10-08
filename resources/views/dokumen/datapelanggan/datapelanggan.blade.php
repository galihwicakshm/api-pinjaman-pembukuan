@extends('layout.dokumentasi')

<div class="container mt-5">
    <h3>data</h3>
    <span class="badge badge-info">API Version 1.0</span>
    <hr>
    <p>Api digunakan untuk mengambil, mengupdate, dan menghapus data pinjaman pelanggan</p>

   
 
        <div class="contoh mt-4">
        <h5>Contoh GET</h5>
             <table class="table">
 
  <tbody>
    <tr>
     <td><span class="badge badge-info">GET</span></td>
      <td>http://api-pembukuan-galih.herokuapp.com/api/data </td>
    </tr>
     
  </tbody>
</table>

 

    <div class="deskripsi-get">
        <h5>Deskripsi</h5>
        <div class="card bg-light mb-3 " >
         <div class="card-body">
        <pre><code>Digunakan untuk menampilkan semua data pinjaman pelanggan</code></pre>
           </div>
</div>
    </div>
    <div class="respon-get">
        <h5>Respon</h5>
         <div class="card bg-light mb-3 " >
         <div class="card-body">
        <pre><code>
{
    "status": 200,
    "message": "Data berhasil ditampilkan",
    "data": [
        {
            "id_data": 1,
            "id_pelanggan": 5,
            "bayar": 300000,
            "bulanan_ke": 1,
            "tanggal_bayar": "2022-10-08",
            "created_at": "2022-10-08 13:47:52",
            "updated_at": "2022-10-08 13:47:52",
            "nama_pelanggan": "Galih Wicaksono",
            "total_bulan": 10
        },
        {
            "id_data": 2,
            "id_pelanggan": 4,
            "bayar": 150000,
            "bulanan_ke": 1,
            "tanggal_bayar": "2022-10-08",
            "created_at": "2022-10-08 13:42:46",
            "updated_at": "2022-10-08 13:42:46",
            "nama_pelanggan": "Scwozer Vancherz",
            "total_bulan": 10
        }
    ]
}</code></pre>
    </div>
        </div>

</div>
   </div>
<div class="respon-404-get mt-3">
    <h5>Respon Error</h5>
     <div class="card bg-light mb-3 " >
         <div class="card-body">
            </div>

</div>
</div>

    <div class="contoh-2 mt-4">
        <h5>Contoh POST</h5>
             <table class="table">
 
  <tbody>
    <tr>
     <td><span class="badge badge-warning">POST</span></td>
      <td>http://api-pembukuan-galih.herokuapp.com/api/data?id_pelanggan=5&bayar=300000&bulanan_ke=1&tanggal_bayar=2022-10-08 </td>
    </tr>
     
  </tbody>
</table>
    <div class="parameter mt-3"> <h5>Parameter</h5>
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
      <th>id_pelanggan</th>
      <td>Digunakan untuk menambah nama pelanggan berdasarkan dengan ID Pelanggan</td>
      <td>Integer</td>
    </tr>
     <tr>
      <th>bayar</th>
      <td>Digunakan untuk menambah data bayaran perbulan pelanggan</td>
      <td>Integer</td>
    </tr>
       <tr>
      <th>bulanan_ke</th>
      <td>Digunakan untuk menambah data bulanan pelanggan</td>
      <td>Integer</td>
    </tr>
     <tr>
      <th>tanggal_bayar</th>
      <td>Digunakan untuk menambah data tanggal bayaran pelanggan</td>
      <td>Date</td>
    </tr>

  </tbody>
</table>
    </div>
    </div>
 

    <div class="deskripsi-get">
        <h5>Deskripsi</h5>
        <div class="card bg-light mb-3 " >
         <div class="card-body">
        <pre><code>Digunakan untuk melakukan POST terhadap data pinjaman pelanggan</code></pre>
           </div>
</div>
    </div>
    <div class="respon-get">
        <h5>Respon</h5>
         <div class="card bg-light mb-3 " >
         <div class="card-body">
        <pre><code>
{
    "status": 200,
    "message": "Data berhasil ditambahkan",
    "data": {
        "id_pelanggan": "5",
        "bayar": "300000",
        "bulanan_ke": "1",
        "tanggal_bayar": "2022-10-08",
        "updated_at": "2022-10-08T14:25:53.000000Z",
        "created_at": "2022-10-08T14:25:53.000000Z",
        "id_data": 14
    }
}</code></pre>
    </div>
        </div>

</div>
   </div>
   <div class="respon-404-get mt-3">
    <h5>Respon Error</h5>
     <div class="card bg-light mb-3 " >
         <div class="card-body">
            <pre><code>
{
    "id_pelanggan": [
        "The id pelanggan field is required."
    ],
    "bayar": [
        "The bayar field is required."
    ],
    "bulanan_ke": [
        "The bulanan ke field is required."
    ],
    "tanggal_bayar": [
        "The tanggal bayar field is required."
    ]
}</code></pre>
            </div>

</div>
</div>


    <div class="contoh-2 mt-4">
        <h5>Contoh SHOW</h5>
             <table class="table">
 
  <tbody>
    <tr>
     <td><span class="badge badge-info">GET</span></td>
      <td>http://api-pembukuan-galih.herokuapp.com/api/data/14 </td>
    </tr>
     
  </tbody>
</table>
    <div class="parameter mt-3"> <h5>Parameter</h5>
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
      <th>{1, 2, 3 ...}</th>
      <td>Digunakan untuk memanggil ID Data Pinjaman Pelanggan</td>
      <td>Integer</td>
    </tr>
    

  </tbody>
</table>
    </div>
    </div>
 

    <div class="deskripsi-get">
        <h5>Deskripsi</h5>
        <div class="card bg-light mb-3 " >
         <div class="card-body">
        <pre><code>Digunakan untuk mengambil data pinjaman pelanggan berdasarkan dengan ID Data Pinjaman Pelanggan</code></pre>
           </div>
</div>
    </div>
    <div class="respon-get">
        <h5>Respon</h5>
         <div class="card bg-light mb-3 " >
         <div class="card-body">
        <pre><code>
{
    "status": 200,
    "message": "Data berhasil ditampilkan",
    "data": [
        {
            "id_data": 14,
            "id_pelanggan": 5,
            "bayar": 300000,
            "bulanan_ke": 1,
            "tanggal_bayar": "2022-10-08",
            "created_at": "2022-10-08 09:19:42",
            "updated_at": "2022-10-08 09:19:42",
            "nama_pelanggan": "Galih Wicaksono",
            "total_bulan": 10
        }
    ]
}</code></pre>
    </div>
        </div>

</div>
   </div>
  <div class="respon-404-get mt-3">
    <h5>Respon Error</h5>
     <div class="card bg-light mb-3 " >
         <div class="card-body">
            <pre><code>
{
    "status": 404,
    "message": "Data tidak ditemukan"
}</code></pre>

            </div>

</div>
</div>


    <div class="contoh-2 mt-4">
        <h5>Contoh UPDATE</h5>
             <table class="table">
 
  <tbody>
    <tr>
     <td><span class="badge badge-secondary">PUT</span></td>
      <td>http://api-pembukuan-galih.herokuapp.com/api/data/14?bayar=300000&bulanan_ke=3&tanggal_bayar=2022-10-08</td>
    </tr>
     
  </tbody>
</table>
    <div class="parameter mt-3"> <h5>Parameter</h5>
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
      <th>{1, 2, 3 ...}</th>
      <td>Digunakan untuk memanggil ID Pelanggan</td>
      <td>Integer</td>
    </tr>
    
     <tr>
      <th>bayar</th>
      <td>Digunakan untuk mengubah data bayaran perbulan pelanggan</td>
      <td>Integer</td>
    </tr>
       <tr>
      <th>bulanan_ke</th>
      <td>Digunakan untuk mengubah data bulanan pelanggan</td>
      <td>Integer</td>
    </tr>
     <tr>
      <th>tanggal_bayar</th>
      <td>Digunakan untuk mengubah data tanggal bayaran pelanggan</td>
      <td>Date</td>
    </tr>


  </tbody>
</table>
    </div>
    </div>
 

    <div class="deskripsi-get">
        <h5>Deskripsi</h5>
        <div class="card bg-light mb-3 " >
         <div class="card-body">
        <pre><code>Digunakan untuk mengubah data pinjaman pelanggan berdasarkan dengan ID Data Pinjaman Pelanggan</code></pre>
           </div>
</div>
    </div>
    <div class="respon-get">
        <h5>Respon</h5>
         <div class="card bg-light mb-3 " >
         <div class="card-body">
        <pre><code>
{
    "status": 200,
    "message": "Data berhasil diperbarui",
    "data": [
        {
            "id_data": 14,
            "id_pelanggan": 5,
            "bayar": 300000,
            "bulanan_ke": 3,
            "tanggal_bayar": "2022-10-08",
            "created_at": "2022-10-08 09:19:42",
            "updated_at": "2022-10-08 09:19:42",
            "nama_pelanggan": "Galih Wicaksono",
            "total_bulan": 10
        }
    ]
}</code></pre>
    </div>
        </div>

</div>
   </div>
  <div class="respon-404-get mt-3">
    <h5>Respon Error</h5>
     <div class="card bg-light mb-3 " >
         <div class="card-body">
            <pre><code>
{
    "bayar": [
        "The bayar field is required."
    ],
    "bulanan_ke": [
        "The bulanan ke field is required."
    ],
    "tanggal_bayar": [
        "The tanggal bayar field is required."
    ]
} </code></pre>
            </div>

</div>
</div>

 <div class="contoh-2 mt-4">
        <h5>Contoh DELETE</h5>
             <table class="table">
 
  <tbody>
    <tr>
     <td><span class="badge badge-danger">DELETE</span></td>
      <td>http://api-pembukuan-galih.herokuapp.com/api/data/14</td>
    </tr>
     
  </tbody>
</table>
    <div class="parameter mt-3"> <h5>Parameter</h5>
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
      <th>{1, 2, 3 ...}</th>
      <td>Digunakan untuk memanggil ID Data Pinjaman Pelanggan</td>
      <td>Integer</td>
    </tr>
   
    

  </tbody>
</table>
    </div>
    </div>
 

    <div class="deskripsi-get">
        <h5>Deskripsi</h5>
        <div class="card bg-light mb-3 " >
         <div class="card-body">
        <pre><code>Digunakan untuk menghapus data pinjaman pelanggan berdasarkan dengan ID Data Pinjaman Pelanggan</code></pre>
           </div>
</div>
    </div>
    <div class="respon-get">
        <h5>Respon</h5>
         <div class="card bg-light mb-3 " >
         <div class="card-body">
        <pre><code>
{
    "status": 200,
    "message": "Data berhasil dihapus"
}</code></pre>
    </div>
        </div>

</div>
   </div>
  <div class="respon-404-get mt-3">
    <h5>Respon Error</h5>
     <div class="card bg-light mb-3 " >
         <div class="card-body">
            <pre><code> 
{
    "status": 400,
    "message": "Data gagal dihapus"
}</code></pre>
            </div>

</div>
</div>

<div class="button text-right mb-3">
    <a href="{{ url('dokumentasi') }}"class="btn btn-primary">Kembali</a>
</div>


</div>