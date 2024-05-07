@extends('Admin.master')
@section('content')
@section('dashboard','active')
    

<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <h3>Dashboard</h3>
    </div>
    <div class="page-content">
        <section class="row">
            <div class="col-12 col-lg-12">
                <div class="row">
                    
                    <!--<div class="col-6 col-lg-4 col-md-6">-->
                    <!--<a href="{{url('/admin/verifikasi-penjual')}}">-->
                    <!--    <div class="card">-->
                    <!--        <div class="card-body px-3 py-4-5">-->
                    <!--            <div class="row">-->
                    <!--                <div class="col-md-4">-->
                    <!--                    <div class="stats-icon purple">-->
                    <!--                        <i class="iconly-boldShow"></i>-->
                    <!--                    </div>-->
                    <!--                </div>-->
                                    
                    <!--                <div class="col-md-8" ">-->
                    <!--                    <h6 class="text-muted font-semibold">Verifikasi Penjual</h6>-->
                    <!--                    <h6 class="font-extrabold mb-0">-->
                                   
                    <!--                    </h6>-->
                    <!--                </div>-->
                                    
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--    </a>-->
                    <!--</div>-->
                    
                    
                    <div class="col-6 col-lg-4 col-md-6">
                    <a href="{{url('/admin/daftar-penjual')}}">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon blue">
                                            <i class="iconly-boldProfile"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted font-semibold">Daftar Penjual </h6>
                                        <h6 class="font-extrabold mb-0">
                                        <?php
                                            $count = DB::table('penjual')->where('status_toko','1')->count();
                                        ?> 
                                        Total : {{$count}}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                    
                    
                    <div class="col-6 col-lg-4 col-md-6">
                    <a href="{{url('/admin/rekap-penjualan')}}">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon red">
                                            <i class="iconly-boldWallet"></i>
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

                    <div class="col-6 col-lg-4 col-md-6">
                    <a href="{{url('/admin/pengaduan')}}">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon red">
                                            <i class="iconly-boldNotification"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted font-semibold">Pengaduan</h6>
                                        <h6 class="font-extrabold mb-0">
                                        <?php
                                            $count = DB::table('pengaduan')->count();
                                        ?>
                                        Total : {{$count}}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                    
                </div>
            </div>

            <!-- <div class="col-12 col-lg-3">
                <div class="card">
                    <div class="card-body py-4 px-5">
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-xl">
                                <img src="assets/images/faces/1.jpg" alt="Face 1">
                            </div>
                            <div class="ms-3 name">
                                <h5 class="font-bold">Profil</h5>
                                <h6 class="text-muted mb-0">@admin</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

        </section>
    </div>
</div>
@endsection    
