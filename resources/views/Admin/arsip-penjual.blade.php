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
        <section class="section">
            <div class="card">
                <div class="card-body">
                    <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                        <div class="dataTable-top">
                            <!-- <div class="dataTable-dropdown">
                                <select class="dataTable-selector form-select">
                                    <option value="5">5</option>
                                    <option value="10" selected="">10</option>
                                    <option value="15">15</option>
                                    <option value="20">20</option>
                                    <option value="25">25</option>
                                </select>
                            </div> -->
                            <div class="dataTable-search ">
                                <input class="dataTable-input" placeholder="Search..." type="text">
                            </div>
                        </div>
                        <div class="dataTable-container">
                            <table class="table table-striped dataTable-table" id="table1">
                                <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Id User</th>
                                            <th>Nama Toko</th>
                                            <th >NIK</th>
                                            <th>Alamat</th>
                                            <th>Kecamatan</th>
                                            <!-- <th>Foto Toko</th>
                                            <th>Foto KTP</th> -->
                                            <th>Aksi</th>
                                            <!-- <th>Status</th> -->
                                        </tr>
                                    </thead>
                                    @php $no = 1; @endphp
                                    @foreach($penjual as $p)
                                    <tbody>
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>{{$p->id}}</td>
                                            <td>{{$p->nama_toko}}</td>
                                            <td>{{$p->nik}}</td>
                                            <td>{{$p->alamat}}</td>
                                            <td>{{$p->kec}}</td>
                                            <!-- <td><img src="" alt="Foto Toko"></td>
                                            <td><img src="" alt="Foto KTP"></td> -->
                                            <td>
                                            <a href="/penjual-aktif/{{$p->id}}" class="btn btn-primary m-1">
                                                Aktifkan
                                            </a>
                                            <!-- <a href="/approve/{{$p->id}}" class="btn btn-success m-1" onclick="return confirm('Aktifkan Toko ?')"  data-toggle="tooltip" data-placement="top" title="Aktif Terverifikasi">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                                                <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
                                                </svg>
                                            </a>
                                            <a href="/nonapprove/{{$p->id}}" class="btn btn-danger m-1" onclick="return confirm('Yakin Untak Nonaktifkan Toko?')" data-toggle="tooltip" data-placement="top" title="Non">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z"/>
                                                    <path fill-rule="evenodd" d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z"/>
                                                </svg> 
                                            </a> -->
                                            </td>
                                            <!-- <td>
                                            <?php
                                                // if ($p->status_toko == 1 ){
                                                //     echo "Aktif";
                                                // } 
                                                // elseif ($p->status_toko == 2 ){
                                                //     echo "Non Aktif";
                                                // }
                                                // else {
                                                //     echo "Belum dikonfirmasi";
                                                // }
                                                ?>
                                            </td> -->
                                        </tr>
                                    @endforeach
                                    </tbody>
                            </table>
                        </div>
                        <div class="dataTable-bottom">
                            <div class="dataTable-info">Showing 1 to 10 of 26 entries</div>
                            <ul class="pagination pagination-primary float-end dataTable-pagination">
                                <li class="page-item pager"><a href="#" class="page-link" data-page="1">‹</a></li>
                                <li class="page-item active"><a href="#" class="page-link" data-page="1">1</a></li>
                                <li class="page-item"><a href="#" class="page-link" data-page="2">2</a></li>
                                <li class="page-item"><a href="#" class="page-link" data-page="3">3</a></li>
                                <li class="page-item pager"><a href="#" class="page-link" data-page="2">›</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
