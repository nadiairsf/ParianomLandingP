@extends('Admin.master')
@section('content')
<div id="main">
   <header class="mb-3">
         <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
         </a>
   </header>

   <div class="page-heading">
      <div class="page-title">
         <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                  <h3>Detail Pengaduan</h3>
                 
                  @foreach ( $pengaduan as $p )
                  @if ($loop->first)
                  <p class="text-subtitle text-muted">Nama Toko : {{$p->nama_penjual}}</p> 
                  @endif  
                  @endforeach
                 
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                  <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                     <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Pengaduan</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Detail Pengaduan</li>
                     </ol>
                  </nav>
            </div>
         </div>
      </div>
      @foreach ($pengaduan as $p )
      <section id="input-style">
         <div class="row">
            <div class="col-md-12">
               <div class="card">
                  <div class="card-body">
                     <div class="row">
                        <div class="col-sm-6">
                           <div class="form-group">
                              <label for="roundText">Tanggal Pengaduan : {{$p -> created_at}} </label>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <label for="squareText">Pengadu : {{$p-> nama_user}}</label>
                           </div>
                        </div>
                        <hr>
                        <div class="col-sm-12">
                           <div class="form-group">
                              <h6><strong for="squareText">Kategori :</strong></h6>
                              <label for="squareText">{{$p->kategori_pengaduan}}</label>
                           </div>
                        </div>
                        <div class="col-sm-12">
                           <div class="form-group">
                              <h6><strong for="squareText">Deskripsi :</strong></h6>
                              <label for="squareText" style="text-align:justify;">{{$p->deskripsi}}</label>
                           </div>
                        </div>
                        <div class="col-sm-12">
                           <div class="form-group">
                              <h6><strong for="squareText">Bukti :</strong></h6>
                              <div class="row " data-bs-toggle="modal" data-bs-target="#galleryModal">
                                 <div class="col-6 col-sm-6 col-lg-6 ">
                                    <a href="#">
                                          <img class="w-50 active" src="" data-bs-target="#Gallerycarousel" data-bs-slide-to="0" alt="Tidak Ada Bukti">
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      @endforeach
      <div class="col-sm-12 d-flex justify-content-end">
         <a href="/admin/daftar-penjual">
            <button type="submit" class="btn btn-warning me-1 mb-1">Suspend Toko</button>
         </a>
      </div>
      <div class="modal fade" id="galleryModal" tabindex="-1" role="dialog"
            aria-labelledby="galleryModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="galleryModalTitle">Our Gallery Example</h5>
                        <button type="button" class="close" data-bs-dismiss="modal"
                            aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div id="Gallerycarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="https://images.unsplash.com/photo-1633008808000-ce86bff6c1ed?ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwyN3x8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
      </div>
      
</div>
@endsection
