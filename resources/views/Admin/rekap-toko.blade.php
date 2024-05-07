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
                    <h3>Rekapitulasi Toko</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Riwayat Transaksi</li>
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
                            <div class="dataTable-search ">
                                <input class="dataTable-input" placeholder="Search..." type="text">
                            </div>
                        </div>
                        <div class="dataTable-container">
                         
                            <a href="{{url ('/export-rekap-toko') }}" class="btn btn-success mt-3 mb-3 float-start">Export</a>
                      
                            <table class="table table-striped dataTable-table" id="table1">
                                <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Toko</th>
                                            <th>Jumlah Pesanan</th>
                                            <th>Omset</th>    
                                        </tr>
                                    </thead>
                                    @php $no = 1; @endphp
                                    @foreach($pesanan as $p)
                                    <tbody>
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>{{$p->nama_toko}}</td>
                                            <td>{{$p->total_jumlah}}</td>
                                            <td>@currency($p->total_harga)</td>
                                          
                                           
                                           
                                          
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