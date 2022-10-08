@extends('layout.layout')


@section('title')
    Pelanggan
@endsection

@section('content')
    <div class="card">
  <div class="card-header">
     <button data-target="#post" data-toggle="modal" class="btn btn-primary">Tambah Data
         </button>
  </div>
  <div class="card-body">
     <div class="row">
      <div class="col-9">

      </div>
<div class="col-3">
  <form class="d-flex" action="/app/pelanggans" method="GET">
                      <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search" />
                      <button class="btn btn-outline-primary" type="submit">Search</button>
                    </form>
   </div></div>
      
    
    
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
            $no = 1;
        @endphp
        @forelse ($data as $pelanggans)
      <th scope="row">{{ $no++ }}</th>
      <td>{{ $pelanggans->nama_pelanggan }}</td>
      <td>{{ $pelanggans->total_bulan }}</td>
      <td> <a href="{{ url('app/datapelanggans/'.$pelanggans->id_pelanggan) }}" class="btn btn-primary btn-sm">Detail</a>
      <button data-target="#edit{{ $pelanggans->id_pelanggan }}" data-toggle="modal" class="btn btn-warning btn-sm">Edit
         </button>
      <form action="{{ url('app/pelanggans/'. $pelanggans->id_pelanggan) }}" class="d-inline" method="post">
          @method('delete')
          @csrf
          <button type="submit" class="btn btn-danger btn-sm d-inline" onclick="return confirm('Are you sure?')">Delete</button>
        </form>
      
      </td>
      
    </tr>
        @empty
              <tr>
        <td colspan="4" class="text-center"> Data tidak ditemukan</td>
    </tr>
        @endforelse
     
   
  </tbody>
</table>
<div class="page mt-4">{{ $data->links()}}
</div>
  </div>
</div>

<div class="modal fade" id="post" tabindex="-1" aria-hidden="true">
   <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel1">Tambah Pelanggan</h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body">
                                <form action="{{ url('app/pelanggans') }}" method="post">
                                  @method('post')
                                  @csrf
                                  <div class="col mb-3">
                                    <label for="nameBasic" class="form-label" >Nama pelanggan</label>
                                     

                                    <input type="text"  class="form-control"  name="nama_pelanggan"  required placeholder="Nama Pelanggan..."/>
                                      <label for="nameBasic" class="form-label" >Total Bulan</label>
                                      <input type="number"  class="form-control"  name="total_bulan"  required placeholder="Total bulan..."/>
                                      
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


          @foreach ($data as $edit)     
                         <div class="modal fade" id="edit{{ $edit->id_pelanggan }}" tabindex="-1" aria-hidden="true">
   <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel1">Ubah Pelanggan</h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body">
                                <form action="{{ url('app/pelanggans/'. $edit->id_pelanggan) }}" method="post">
                                  @method('put')
                                  @csrf
                                  <div class="col mb-3">
                                    <label for="nameBasic" class="form-label" >Nama pelanggan</label>
                                      <input type="hidden"  class="form-control"  name="id_pelanggan"  required />

                                    <input type="text"  class="form-control"  name="nama_pelanggan" value="{{ $edit->nama_pelanggan }}" required />
                                      <label for="nameBasic" class="form-label  mt-2" >Total Bulan</label>
                                      <input type="number"  class="form-control"  name="total_bulan" value={{ $edit->total_bulan }} required/>
                                      
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
                        @endforeach

@endsection