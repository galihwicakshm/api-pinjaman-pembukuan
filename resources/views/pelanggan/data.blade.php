@extends('layout.layout')

@section('title')
    Data Pelanggan
@endsection

@section('content')
      <div class="card">
  <div class="card-header">
      <div class="text-end">   
         <button data-target="#post" data-toggle="modal" class="btn btn-primary">Tambah Data
         </button>
</div>
  </div>
  <div class="card-body">
    <h5 class="card-title">Data Pelanggan</h5>
    
    <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Pelanggan</th>
      <th scope="col">Bayaran Ke</th>
      <th scope="col">Tangal Bayar</th>
      <th scope="col">Total Bulan</th>

    </tr>
  </thead>
  <tbody>
    <tr>
        @php
            $no = 1;
        @endphp
        @forelse ($data as $datas)
      <th scope="row">{{ $no++ }}</th>
      <td>{{ $datas->nama_pelanggan }}</td>
      <td>{{ $datas->bulanan_ke}}</td>
      <td>{{ date('j F Y',strtotime($datas->tanggal_bayar))}}</td>
      <td>Rp. {{ number_format($datas->bayar) }}</td>
    </tr>
        @empty
        <tr>
          <td colspan=5 class="text-center">Data kosong</td>
        </tr>
        @endforelse
     
   
  </tbody>
</table>


  </div>
  
</div>
 <div class="text-end">  
   <a href="{{ url('app/pelanggans') }}" class="btn btn-warning mt-3">Kembali</a>
</div>

 <div class="modal fade" id="post" tabindex="-1" aria-hidden="true">
   <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel1">Ubah pelanggan</h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body">
                                <form action="{{ url('app/datapelanggans') }}" method="post">
                                  @method('post')
                                  @csrf
                                  <div class="col mb-3">
                                    <label for="nameBasic" class="form-label" >Nama pelanggan</label>
                                      <input type="hidden"  class="form-control"  name="id_pelanggan" value={{ $id_pelanggan->id_pelanggan }} required />

                                    <input type="text"  class="form-control"  name="nama_pelanggan" value="{{ $id_pelanggan->nama_pelanggan }}"  required readonly/>
                                      <label for="nameBasic" class="form-label  mt-2" >Tangal Bayar</label>
                                      <input type="date"  class="form-control"  name="tanggal_bayar"  required/>
                                       <label for="nameBasic" class="form-label mt-2" >Bayar</label>
                                      <input type="number"  class="form-control"  name="bayar" placeholder="Total Bayar..." required/>
                                         <label for="nameBasic" class="form-label  mt-2" >Bulanan Ke</label>

                                         <select class="form-control" id="exampleFormControlSelect1" name="bulanan_ke" >
                    
                                          <option value=1>1</option>
                                          <option value=2>2</option>
                                          <option value=3>3</option>
                                          <option value=4>4</option>
                                          <option value=5>5</option>
                                          <option value=6>6</option>
                                          <option value=7>7</option>
                                          <option value=8>8</option>
                                          <option value=9>9</option>
                                          <option value=10>10</option>
                                        </select>
                                  </div>
                              
                                </div>
                              
                              <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">
                                  Close
                                </button>
                                <button type="submit" class="btn btn-primary" >Save changes</button>
                                    </form>
                             </div>
                            </div>
                          </div>
                        </div>
                       

@endsection