<!DOCTYPE html>
<html lang="en">
<head>
	<title>Parianom</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="favicon.ico"/>
<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{('css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{('fonts/linearicons-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{('css/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{('css/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{('css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{('css/select2.min.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{('css/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{('css/slick.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{('css/lightbox.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{('css/perfect-scrollbar.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{('css/nouislider.min.css')}}">
<!--===============================================================================================-->
	
	<link rel="stylesheet" type="text/css" href="{{('css/main.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" href="css/icofont.css">
	<style>
	    .center-cropped {
          object-fit: cover; /* Do not scale the image */
          object-position: center; /* Center the image within the element */
          width:  160px;
          height: 280px;
        
         
        }
	</style>
</head>
<body class="animsition">


	
	<!-- Title page -->
	<section class="how-overlay2 bg-img1" style="background-image: url(images/bg-07.jpg);">
		<div class="container">
			<div class="txt-center p-t-160 p-b-165">
				<h2 class="txt-l-101 cl0 txt-center p-b-14 respon1">
					PARIANOM
				</h2>

				<span class="txt-m-201 cl0 flex-c-m flex-w">
					<a href="{{ url('/') }}" class="txt-m-201 cl0 hov-cl10 trans-04 m-r-6">
						Beranda
					</a>

					<a href="{{ url('/shop-kriya') }}" class="txt-m-201 cl0 hov-cl10 trans-04 m-r-6">
						/ Belanja Kriya
					</a>
				</span>
			</div>
		</div>
	</section>
	
	<!-- Content page -->
	<section class="bg0 p-t-85 p-b-45">
		<div class="container">
			<div class="row">
				<div class="col-sm-10 col-md-4 col-lg-3 m-rl-auto p-b-50">
					<div class="leftbar p-t-15">
						<!--  -->
						
						<form action="{{ route('search_pangan') }}" method="GET">
							<div class="size-a-21 pos-relative">
								<input class="s-full bo-all-1 bocl15 p-rl-20" type="text" name="search" placeholder="Cari" value="{{ old('cari') }}"> 
								<button class="flex-c-m fs-18 size-a-22 ab-t-r hov11" type="submit">
									<img class="hov11-child trans-04" src="images/icons/icon-search.png" alt="ICON">
								</button>
							</div>
						</form>

						<!--  -->
						<!-- <div class="p-t-45">
							<h4 class="txt-m-101 cl3">
								Filter Harga
							</h4>

							<div class="filter-price p-t-32">
								<div class="wra-filter-bar">
									<div id="filter-bar"></div>
								</div>

								<div class="flex-sb-m flex-w p-t-16">
									<div class="txt-s-115 cl9 p-t-10 p-b-10 m-r-20">
										Harga: Rp.<span id="value-lower"> 5000</span> - Rp.<span id="value-upper"> 100000</span>
									</div>
								</div>
							</div>
						</div> -->
							
						<!--  -->
						<div class="p-t-40">
							<h4 class="txt-m-101 cl3 p-b-37">
								Kategori
							</h4>

							<ul>
								<li class="p-b-5">
									<a href="{{ url('/shop-pangan') }}" class="flex-sb-m flex-w txt-s-101 cl6 hov-cl10 trans-04 p-tb-3">
										<span class="m-r-10">
											Semua
										</span>
                                        	<?php
                								$count = DB::table('produk')->where('kategori','pangan')->count();
                							?> 
										<span>
											{{$count}}
										</span>
									</a>
								</li>

								<li class="p-b-5">
									<a href="{{ url('/pangan-makanan') }}" class="flex-sb-m flex-w txt-s-101 cl6 hov-cl10 trans-04 p-tb-3">
										<span class="m-r-10">
											Makanan
										</span>
										    <?php
                								$cmakanan = DB::table('produk')->where('kategori_sub','makanan')->count();
                							?> 
										<span>
											{{$cmakanan}}
										</span>
									</a>
								</li>

								<li class="p-b-5">
									<a href="{{ url('/pangan-minuman') }}" class="flex-sb-m flex-w txt-s-101 cl6 hov-cl10 trans-04 p-tb-3">
										<span class="m-r-10">
											Minuman
										</span>
                                            <?php
                								$cminuman = DB::table('produk')->where('kategori_sub','minuman')->count();
                							?> 
										<span>
											{{$cminuman}}
										</span>
									</a>
								</li>

								<li class="p-b-5">
									<a href="{{ url('/pangan-camilan') }}" class="flex-sb-m flex-w txt-s-101 cl6 hov-cl10 trans-04 p-tb-3">
										<span class="m-r-10">
											Camilan
										</span>
                                            <?php
                								$ccamilan = DB::table('produk')->where('kategori_sub','camilan')->count();
                							?> 
										<span>
											{{$ccamilan}}
										</span>
									</a>
								</li>

								<li class="p-b-5">
									<a href="{{ url('/pangan-bahanBaku') }}" class="flex-sb-m flex-w txt-s-101 cl6 hov-cl10 trans-04 p-tb-3">
										<span class="m-r-10">
											Bahan Baku
										</span>
                                            <?php
                								$cbahan = DB::table('produk')->where('kategori_sub','bahan olahan')->count();
                							?> 
										<span>
											{{$cbahan}}
										</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-sm-10 col-md-8 col-lg-9 m-rl-auto p-b-50">
					<div>
						<div class="flex-w flex-r-m p-b-45 flex-row-rev">
							<div class="flex-w flex-m p-tb-8">
								<!-- <div class="rs1-select2 bg0 size-w-52 bo-all-1 bocl15 m-tb-7 m-r-15">
									<select class="js-select2" name="sort">
										<option>Sort by popularity</option>
										<option>Sort by best sell</option>
										<option>Sort by special</option>
									</select>
									<div class="dropDownSelect2"></div>
								</div> -->
								
								<div class="flex-w flex-m m-tb-7">
									<!--<button class="dis-block lh-00 pos-relative how-icon1 m-r-15 js-show-list">-->
									<!--	<img class="icon-main trans-04" src="images/icons/icon-menu-list.png" alt="ICON">-->
									<!--	<img class="ab-t-l icon-hov trans-04" src="images/icons/icon-menu-list1.png" alt="ICON">-->
									<!--</button>-->

									<button class="dis-block lh-00 pos-relative how-icon1 menu-active js-show-grid">
										<img class="icon-main trans-04" src="images/icons/icon-grid.png" alt="ICON">
										<img class="ab-t-l icon-hov trans-04" src="images/icons/icon-grid1.png" alt="ICON">
									</button>
								</div>
							</div>

						
							<span class="txt-s-101 cl9 m-r-30 size-w-53">
								Menampilkan 1-{{$count}} dari {{$count}} hasil
							</span>
						</div>
						
						<!-- Shop grid -->
						<div class="shop-grid">
							<div class="row">
								<!-- - -->
								@foreach ($produk as $p )
								<div class="col-sm-6 col-lg-4 p-b-30">
									<!-- Block1 -->
									<div class="block1">
									   
										<div class="block1-bg wrap-pic-w bo-all-1 bocl12 hov3 trans-04">
											<!--<img src="{{ asset('/images/'.$p->foto_produk) }}" alt="PRODUCT">-->
									
                                                 	<img class="center-cropped" src="data:image/png;base64, {{$p->foto_produk}}" alt="Produk" />
                                          
											<div class="block1-content flex-col-c-m p-b-46">									
												<div class="block1-wrap-icon flex-c-m flex-w trans-05">
												<a href="https://play.google.com/store/apps/details?id=com.madhang_ae" class="block1-icon flex-c-m wrap-pic-max-w ">
														<img src="images/icons/icon-cart.png" alt="ICON">
													</a>
												</div>
											</div>	
										</div>

										<div class="">
											<a class="block1-content-more cl9 txt-center  trans-04 js-name-b1 txt-s-101">
												<img class="mr-2" src="images/icons/icon-pin.png" alt="MAP">
												{{$p->alamat}} | {{$p->nama_toko}}
											</a>
											<br>
											<div class="mt-2">
												<a class="txt-m-103 cl3 txt-center  trans-04 js-name-b1">
													{{$p->nama}}
												</a>
											
												<br>
												<b class="txt-m-104 cl10 trans-04 ">
												@currency($p->harga)
												</b>
											</div>
										</div>										
									</div>
								</div>
								@endforeach
								<!-- - -->
							</div>
						</div>
						

						@foreach ($produk as $p )
						<!-- Shop list -->
						<!--<div class="shop-list dis-none">-->
						<!--	<div class="row p-b-30">-->
						<!--		<div class=" col-sm-5 col-lg-4">-->
						<!--			<a href="#" class="wrap-pic-w bo-all-1 bocl12 hov8 trans-04">-->
						<!--			    <img src="data:image/png;base64, {{$p->foto_produk}}" alt="Produk" />-->
						<!--			</a>-->
						<!--		</div>-->

						<!--		<div class=" col-sm-7 col-lg-8">-->
						<!--			<div class="p-t-5 p-b-20">-->
						<!--				<div class="flex-w flex-sb-m">-->
						<!--					<a href="product-single.html" class="txt-m-120 cl3 hov-cl10 trans-04 m-r-20 js-name1">-->
						<!--						{{$p->nama}}-->
						<!--					</a>-->
											
						<!--				</div>-->
						<!--				<p>{{$p->deskripsi}}</a><br>-->
						<!--				<span class="txt-m-117 cl10">-->
						<!--				@currency($p->harga)-->
						<!--				</span>-->
						<!--				<br><br><br>-->
						<!--				<p class="txt-s-101 cl6 p-t-18">-->
						<!--					<img class="mr-2" src="images/icons/icon-pin.png" alt="MAP">-->
						<!--					{{$p->alamat}} | {{$p->nama_toko}}-->
						<!--				</p>-->

						<!--				<div class="flex-w p-t-29">-->
						<!--				    <a href="https://play.google.com/store/apps/details?id=com.madhang_ae">-->
      <!--                                          <button class="flex-c-m txt-s-103 cl0 bg10 size-a-2 hov-btn2 trans-04" >-->
						<!--						Beli-->
						<!--				    	</button>										    -->
						<!--				    </a>-->
						<!--				</div>	-->
						<!--			</div>-->
						<!--		</div>-->
						<!--	</div>-->
						<!--</div>-->
						@endforeach

						<!-- Pagination -->
						<!--Pagination -->
						<div class="flex-w flex-c-m p-t-47">
					     @if ($produk->lastPage() > 1)
                        <ul class="pagination">
                            <li class="{{ ($produk->currentPage() == 1) ? ' disabled' : '' }}">
                                <a href="{{ $produk->url(1) }}">Previous</a>
                            </li>
                            @for ($i = 1; $i <= $produk->lastPage(); $i++)
                                <li class="{{ ($produk->currentPage() == $i) ? ' active' : '' }}">
                                    <a href="{{ $produk->url($i) }}">{{ $i }}</a>
                                </li>
                            @endfor
                            <li class="{{ ($produk->currentPage() == $produk->lastPage()) ? ' disabled' : '' }}">
                                <a href="{{ $produk->url($produk->currentPage()+1) }}" >Next</a>
                            </li>
                        </ul>
                        @endif

					</div>
				</div>
			</div>
		</div>
	</section>
	

	<!-- Footer -->
	<footer class="bg12">
		<div class="container">

			<div class="flex-w flex-sb-m bo-t-1 bocl14 p-tb-14">
				<span class="txt-s-101 cl9 p-tb-10 p-r-29">
					Copyright © 2021 Tjah Ae
				</span>
			</div>
		</div>
	</footer>
	

	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<span class="icofont icofont-caret-up"></span>
		</span>
	</div>

<!--===============================================================================================-->	
	<script src="js/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="js/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/moment.min.js"></script>
	<script src="js/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="js/slick.min.js"></script>
	<script src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script src="js/parallax100.js"></script>
<!--===============================================================================================-->
	<script src="js/lightbox.min.js"></script>
<!--===============================================================================================-->
	<script src="js/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
	<script src="js/sweetalert.min.js"></script>
<!--===============================================================================================-->
	<script src="js/perfect-scrollbar.min.js"></script>
<!--===============================================================================================-->
	<script src="js/nouislider.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
</body>
</html>