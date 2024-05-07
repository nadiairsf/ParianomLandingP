@extends('Admin.master')
@section('title','Pengaduan')
@section('pengaduan','active')
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
                    <h3>Daftar Penjual</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Daftar Penjual</li>
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
                                    <th>Toko</th>
                                    <th>Nama Pengadu</th>
                                    <th>Kategori Pengaduan</th>
                                    <th>Total Pengaduan</th>
                                    <th>Aksi</th>
                                 </tr>
                              </thead>
                              @php $no = 1; @endphp
                              @foreach ( $pengaduan as $p )
                              <tbody>
                                 <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{ $p-> nama_penjual}}</td>
                                    <td>{{ $p-> nama_user}}</td>
                                    <td>{{ $p-> kategori_pengaduan }}</td>
                                    <td>{{ $p->total}}</td>   
                                
                                    <td>
                                       <a href="/admin/detail-pengaduan/{{$p->id_penjual}}" class="btn btn-info m-1">
                                             Detail
                                       </a>
                                    </td>
                                 </tr>
                              </tbody>
                              @endforeach
                            </table>
                        </div>
                       
                        <!--<div class="dataTable-bottom">-->
                        <!--    <div class="dataTable-info">Showing 1 to 10 of 26 entries</div>-->
                        <!--    <ul class="pagination pagination-primary float-end dataTable-pagination">-->
                        <!--        <li class="page-item pager"><a href="#" class="page-link" data-page="1">‹</a></li>-->
                        <!--        <li class="page-item active"><a href="#" class="page-link" data-page="1">1</a></li>-->
                        <!--        <li class="page-item"><a href="#" class="page-link" data-page="2">2</a></li>-->
                        <!--        <li class="page-item"><a href="#" class="page-link" data-page="3">3</a></li>-->
                        <!--        <li class="page-item pager"><a href="#" class="page-link" data-page="2">›</a></li>-->
                        <!--    </ul>-->
                        <!--</div>-->
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
