@extends('Admin.master')
@section('title','Rekapitulasi')
@section('rekapitulasi','active')
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
                    <h3>Rekap Penjualan</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Rekapitulasi</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
        <div class="col-12 col-lg-9">
                <div class="row">
                    
                    <div class="col-12 col-lg-4 col-md-6 d-none d-lg-block">
                        <a href="{{url('/admin/rekap-penjualan')}}">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon purple">
                                            <i class="iconly-boldShow"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted font-semibold">Jumlah Penjualan</h6>
                                        <h6 class="font-extrabold mb-0">
                                        <?php
                                            $count = DB::table('pesanan')->where('status','1')->sum('jumlah');
                                        ?> 
                                        {{$count}}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>

                    <div class="col-12 col-lg-4 col-md-6 d-none d-lg-block">
                    <a href="{{url('/admin/rekap-penjualan')}}">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon red">
                                            <i class="iconly-boldBookmark"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted font-semibold">Omeset Penjualan</h6>
                                        <h6 class="font-extrabold mb-0">
                                        <?php
                                            $count = DB::table('pesanan')->where('status','1')->sum('total');
                                        ?>
                                        @currency($count)
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>

                    <!-- Large -->
                    <div class="col-12 col-lg-4 col-md-6 d-lg-none">
                    <a href="{{url('/admin/verifikasi-penjual')}}">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="stats-icon purple mr-3">
                                            <i class="iconly-boldShow"></i>
                                        </div>
                                        
                                        <div class="ml-5" >
                                            <h6 class="text-muted font-semibold">Jumlah Penjualan</h6>
                                            <h6 class="font-extrabold mb-0">
                                            <?php
                                                $count = DB::table('pesanan')->where('status','1')->count();
                                            ?> 
                                            {{$count}}
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-12 col-lg-4 col-md-6 d-lg-none">
                    <a href="{{url('/admin/rekap-penjualan')}}">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="stats-icon red">
                                            <i class="iconly-boldBookmark"></i>
                                        </div>
                                        <div class="col-md-8">
                                        <h6 class="text-muted font-semibold">Omeset Penjualan</h6>
                                        <h6 class="font-extrabold mb-0">
                                        <?php
                                            $count = DB::table('pesanan')->where('status','1')->sum('total');
                                        ?>
                                        @currency($count)
                                        </h6>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                    
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                        <div class="dataTable-top">
                            <div class="dataTable-search ">
                                <input class="dataTable-input" placeholder="Search..." type="text">
                            </div>
                        </div>
                        <div class="dataTable-container">
                            <a href="{{url ('/export-rekap') }}" class="btn btn-success mt-3 mb-3">Export</a>
                            <table class="table table-striped dataTable-table">
                                <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Penjual</th>
                                            <th>Nama Toko</th>
                                            <th>Kode Pesanan</th>
                                            <th>Jumlah</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    @php $no = 1; @endphp
                                    @foreach($pesanan as $p)
                                    <tbody>
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>
                                            <?php
                                                $date = new DateTime($p->timestamp);
                                                echo $date->format('d-m-Y'); 
                                            ?>
                                            </td>
                                            <td>{{$p->nama_lengkap}}</td>
                                            <td>{{$p->nama_toko}}</td>
                                            <td>{{$p->kode_pesanan}}</td>
                                            <td>{{$p->jumlah}}</td>
                                            <td>@currency($p->total)</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                            </table>
                        </div>
                         @if ($pesanan->lastPage() > 1)
                        <div class="dataTable-bottom">
                            <div class="dataTable-info">Jumlah pesanan {{$count}}</div>
                            <ul class="pagination pagination-primary float-end dataTable-pagination">
                                <li class="{{ ($pesanan->currentPage() == 1) ? ' disabled' : '' }}">
                                    <a href="{{ $pesanan->url(1) }}">Previous</a>
                                </li>
                                @for ($i = 1; $i <= $pesanan->lastPage(); $i++)
                                    <li class="{{ ($pesanan->currentPage() == $i) ? ' active' : '' }}">
                                        <a href="{{ $pesanan->url($i) }}">{{ $i }}</a>
                                    </li>
                                @endfor
                                <li class="{{ ($pesanan->currentPage() == $pesanan->lastPage()) ? ' disabled' : '' }}">
                                    <a href="{{ $pesanan->url($pesanan->currentPage()+1) }}" >Next</a>
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