@extends('Admin.master')
@section('title','Daftar Penjual')
@section('daftar-penjual','active')
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
        <section class="row">
            <div class="col-12 col-lg-9">
                <div class="row">
                    
                    <div class="col-6 col-lg-4 col-md-6">
                        <a href="{{url('/admin/arsip-penjual')}}">
                            <div class="card">
                                <div class="card-body px-3 py-4-5">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="stats-icon red">
                                                <i class="iconly-boldBookmark"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="text-muted font-semibold">Arsip Pendaftar</h6>
                                            <h6 class="font-extrabold mb-0">
                                            <?php
                                            $count = DB::table('penjual')->where('status_toko','0')->count();
                                        ?> 
                                        {{$count}}
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    
                </div>
            </div>

        </section>
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
                                            <th>Nama Penjual</th>
                                            <th>Nama Toko</th>
                                            <th>Alamat</th>
                                            <th>Kecamatan</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    @php $no = 1; @endphp
                                    @foreach($penjual as $p)
                                    <tbody>
                                        <tr>
                                            <td hidden>{{$p->penjual_id}}</td>
                                            <td>{{$no++}}</td>
                                            <td>{{$p->nama_lengkap}}</td>
                                            <td>{{$p->nama_toko}}</td>
                                            <td>{{$p->alamat}}</td>
                                            <td>{{$p->kec}}</td>
                                            <td>
                                            <?php
                                                if ($p->status_toko == 1 ){
                                                    echo "Belum Terverifikasi";
                                                }
                                                elseif ($p->status_toko == 2 ){
                                                    echo "Terverifikasi";
                                                }
                                                elseif ($p->status_toko == 3 ){
                                                    echo "Tutup Sementara";
                                                }
                                                elseif ($p->status_toko == 4 ){
                                                    echo "Banned";
                                                } 
                                                else {
                                                    echo "Belum dikonfirmasi";
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <a href="/admin/detail-penjual/{{$p->penjual_id}}" class="btn btn-info m-1">
                                                    Detail
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                            </table>
                        </div>
                        <?php
							$count = DB::table('penjual')->count();
						?> 
                         @if ($penjual->lastPage() > 1)
                        <div class="dataTable-bottom">
                            <div class="dataTable-info">Jumlah Penjual {{$count}}</div>
                            <ul class="pagination pagination-primary float-end dataTable-pagination">
                                <li class="{{ ($penjual->currentPage() == 1) ? ' disabled' : '' }}">
                                    <a href="{{ $penjual->url(1) }}">Previous</a>
                                </li>
                                @for ($i = 1; $i <= $penjual->lastPage(); $i++)
                                    <li class="{{ ($penjual->currentPage() == $i) ? ' active' : '' }}">
                                        <a href="{{ $penjual->url($i) }}">{{ $i }}</a>
                                    </li>
                                @endfor
                                <li class="{{ ($penjual->currentPage() == $penjual->lastPage()) ? ' disabled' : '' }}">
                                    <a href="{{ $penjual->url($penjual->currentPage()+1) }}" >Next</a>
                                </li>
                            </ul>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection

