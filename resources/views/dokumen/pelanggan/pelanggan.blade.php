@extends('layout.dokumentasi')

<div class="container mt-5">
    <h3>pelanggan</h3>
    <span class="badge badge-info">API Version 1.0</span>
    <hr>
    <p>Api digunakan untuk mengambil, mengupdate, dan menghapus pelanggan</p>

   
 
        <div class="contoh mt-4">
        <h5>Contoh GET</h5>
             <table class="table">
 
  <tbody>
    <tr>
     <td><span class="badge badge-info">GET</span></td>
      <td>http://api-pembukuan-galih.herokuapp.com/api/pelanggan </td>
    </tr>
     
  </tbody>
</table>

 

    <div class="deskripsi-get">
        <h5>Deskripsi</h5>
        <div class="card bg-light mb-3 " >
         <div class="card-body">
        <pre><code>Digunakan untuk menampilkan semua nama pelanggan</code></pre>
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
            "id_pelanggan": 3,
            "nama_pelanggan": "Galih Wicaksono H.M",
            "total_bulan": 10,
            "created_at": "2022-10-08T11:51:03.000000Z",
            "updated_at": "2022-10-08T11:51:35.000000Z"
        },
        {
            "id_pelanggan": 4,
            "nama_pelanggan": "Scwozer Vancherz",
            "total_bulan": 10,
            "created_at": "2022-10-08T13:42:46.000000Z",
            "updated_at": "2022-10-08T13:42:46.000000Z"
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
      <td>http://api-pembukuan-galih.herokuapp.com/api/pelanggan?nama_pelanggan=Galih Wicaksono&total_bulan=10 </td>
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
      <th>nama_pelanggan</th>
      <td>Digunakan untuk menambah nama pelanggan</td>
      <td>String</td>
    </tr>
     <tr>
      <th>total_bulan</th>
      <td>Digunakan untuk menambah total bulan pinjaman pelanggan</td>
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
        <pre><code>Digunakan untuk melakukan POST terhadap pelanggan</code></pre>
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
        "nama_pelanggan": "Galih Wicaksono",
        "total_bulan": "10",
        "updated_at": "2022-10-08T13:47:52.000000Z",
        "created_at": "2022-10-08T13:47:52.000000Z",
        "id_pelanggan": 5
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
    "nama_pelanggan": [
        "The nama pelanggan field is required."
    ],
    "total_bulan": [
        "The total bulan field is required."
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
      <td>http://api-pembukuan-galih.herokuapp.com/api/pelanggan/3 </td>
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
    

  </tbody>
</table>
    </div>
    </div>
 

    <div class="deskripsi-get">
        <h5>Deskripsi</h5>
        <div class="card bg-light mb-3 " >
         <div class="card-body">
        <pre><code>Digunakan untuk mengambil data pelanggan berdasarkan dengan ID Pelanggan</code></pre>
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
            "id_pelanggan": 3,
            "nama_pelanggan": "Galih Wicaksono H.M",
            "total_bulan": 10,
            "created_at": "2022-10-08 11:51:03",
            "updated_at": "2022-10-08 11:51:35"
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
      <td>http://api-pembukuan-galih.herokuapp.com/api/pelanggan/3?nama_pelanggan=Hanggoro Mukti&total_bulan=5</td>
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
      <th>nama_pelanggan</th>
      <td>Digunakan untuk mengubah nama pelanggan</td>
      <td>String</td>
    </tr>
     <tr>
      <th>total_bulan</th>
      <td>Digunakan untuk mengubah total bulan pinjaman pelanggan</td>
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
        <pre><code>Digunakan untuk mengubah data pelanggan berdasarkan dengan ID Pelanggan</code></pre>
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
    "data": {
        "id_pelanggan": 3,
        "nama_pelanggan": "Hanggoro Mukti",
        "total_bulan": "5",
        "created_at": "2022-10-08T11:51:03.000000Z",
        "updated_at": "2022-10-08T14:11:30.000000Z"
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
    "nama_pelanggan": [
        "The nama pelanggan field is required."
    ],
    "total_bulan": [
        "The total bulan field is required."
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
      <td>http://api-pembukuan-galih.herokuapp.com/api/pelanggan/3</td>
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
   
    

  </tbody>
</table>
    </div>
    </div>
 

    <div class="deskripsi-get">
        <h5>Deskripsi</h5>
        <div class="card bg-light mb-3 " >
         <div class="card-body">
        <pre><code>Digunakan untuk menghapus data pelanggan berdasarkan dengan ID Pelanggan</code></pre>
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