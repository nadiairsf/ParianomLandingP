@extends('Admin.master')
@section('title','Verifikasi Penjual')
@section('verifikasi','active')
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
                    <h3>Verifikasi Penjual</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Verifikasi Penjual</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section id="basic-horizontal-layouts">
            <div class="row match-height">
                  <div class="col-md-6 col-12">
                     <div class="card">
                        <div class="card-header">
                              <h4 class="card-title">Data Penjual</h4>
                        </div>
                        <div class="card-content">
                              <div class="card-body">
                              @foreach($penjual as $p)
                                 <div class="form-body">
                                       <div class="row">
                                          <div class="col-md-4">
                                             <label>Nama Toko</label>
                                          </div>
                                          <div class="col-md-8 form-group">
                                           <label>{{$p->nama_toko}}</label>
                                          </div>
                                          <div class="col-md-4">
                                             <label>NIK</label>
                                          </div>
                                          <div class="col-md-8 form-group">
                                          <label>{{$p->nik}}</label>
                                          </div>
                                          <div class="col-md-4">
                                             <label>Alamat</label>
                                          </div>
                                          <div class="col-md-8 form-group">
                                          <label>{{$p->alamat}}</label>
                                          </div>
                                          <div class="col-md-4">
                                             <label>NPWP</label>
                                          </div>
                                          <div class="col-md-8 form-group">
                                          <label>{{$p->npwp}}</label>
                                          </div>
                                          <div class="col-md-4">
                                             <label>Sertif Lain</label>
                                          </div>
                                          <div class="col-md-8 form-group">
                                          <label>{{$p->sertif_lain}}</label>
                                          </div>
                                          <div class="col-md-4">
                                             <label>Kecamatan</label>
                                          </div>
                                          <div class="col-md-8 form-group">
                                          <label>{{$p->kec}}</label>
                                          </div>
                                        
                                          <div class="col-sm-12 d-flex justify-content-end">
                                              <a href="/approve/{{$p->id}}">
                                                <button type="submit" class="btn btn-primary me-1 mb-1" onclick="return confirm('Aktifkan Toko Belum Terverifikasi?')"  data-toggle="tooltip">Acc Belum Terverifikasi</button>
                                              </a>
                                              <a href="/approve/active/{{$p->id}}">
                                                <button type="submit" class="btn btn-success me-1 mb-1" onclick="return confirm('Aktifkan Toko Terverifikasi?')"  data-toggle="tooltip">Acc Terverifikasi</button>
                                              </a>
                                              <a href="/nonapprove/{{$p->id}}">
                                              <button type="reset" class="btn btn-danger me-1 mb-1"   onclick="return confirm('Tolak Toko ?')"  data-toggle="tooltip">Tolak</button>
                                              </a>
                                          </div>
                                       </div>
                                 </div>
                                @endforeach
                              </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Foto Ktp & Foto Toko</h5>
                    </div>
                    <div class="card-body">
                        <div class="row gallery" data-bs-toggle="modal" data-bs-target="#galleryModal">
                            <div class="col-6 col-sm-6 col-lg-6 mt-2 mt-md-0 mb-md-0 mb-2">
                                <a href="#">
                                    <img class="w-100 active" src="https://parianom.ae-techno.com/images/app/images_ktp/{{$p->foto_ktp}}" data-bs-target="#Gallerycarousel" data-bs-slide-to="0" alt="Foto KTP Tidak Ada">
                                </a>
                            </div>
                            <div class="col-6 col-sm-6 col-lg-6 mt-2 mt-md-0 mb-md-0 mb-2">
                                <a href="#">
                                    <img class="w-100 active" src="https://parianom.ae-techno.com/images/app/images_toko/{{$p->foto_toko}}"  data-bs-target="#Gallerycarousel" data-bs-slide-to="1" alt="Foto Toko Tidak Ada">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
         </section>
         <div class="modal fade" id="galleryModal" tabindex="-1" role="dialog"
            aria-labelledby="galleryModalTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-centered"
            role="document">
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
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#Gallerycarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#Gallerycarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="https://parianom.ae-techno.com/images/app/images_ktp/{{$p->foto_ktp}}" alt="Foto KTP Tidak Ada">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="https://parianom.ae-techno.com/images/app/images_toko/{{$p->foto_toko}}" alt="Foto Toko Tidak Ada">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#Gallerycarousel" role="button" type="button" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                </a>
                                <a class="carousel-control-next" href="#Gallerycarousel" role="button" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                </a>
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
