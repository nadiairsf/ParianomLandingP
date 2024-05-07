<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset ('assets/css/bootstrap.css') }}">

    <link rel="stylesheet" href="{{asset ('assets/vendors/iconly/bold.css') }}">
    <link rel="stylesheet" href="assets/vendors/sweetalert2/sweetalert2.min.css">

    <link rel="stylesheet" href="{{asset ('assets/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{asset ('assets/css/app.css') }}">
    <link rel="shortcut icon" href="{{asset ('assets/images/favicon.svg') }}" type="image/x-icon">
    <script type="text/JavaScript">
	    function killCopy(e){
	        return false
	    }
	    function reEnable(){
	        return true
	    }
	    document.onselectstart=new Function ("return false")
	    if (window.sidebar){
	        document.onmousedown=killCopy
	        document.onclick=reEnable
	    }
	</script>
</head>

<body oncontextmenu="return false" onselectstart="return false" onkeydown="if ((arguments[0] || window.event).ctrlKey) return false">
<div id="app">
   <div id="sidebar" class="active">
      <div class="sidebar-wrapper active">
            <div class="sidebar-header">
               <!-- <div class="d-flex justify-content-between">
                  <div class="logo">
                        <a href="/admin"><img src="{{asset('/images/demo-2/logo.png')}}" alt="Logo" ></a>
                  </div>
                  <div class="toggler">
                        <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                  </div>
               </div> -->
            </div>
            <div class="sidebar-menu">
               <ul class="menu">
                  <li class="sidebar-title">Menu</li>

                  <li class="sidebar-item @yield('dashboard') ">
                        <a href="/admin" class='sidebar-link'>
                           <i class="bi bi-grid-fill"></i>
                           <span>Dashboard</span>
                        </a>
                  </li>
                  <!--<li class="sidebar-item @yield('verifikasi') ">-->
                  <!--      <a href="/admin/verifikasi-penjual" class='sidebar-link'>-->
                  <!--         <i class="bi bi-check-square-fill"></i>-->
                  <!--         <span>Verifikasi Penjual</span>-->
                  <!--      </a>-->
                  <!--</li>-->
                  <li class="sidebar-item @yield('daftar-penjual') ">
                        <a href="/admin/daftar-penjual" class='sidebar-link'>
                           <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                           <span>Daftar Penjual</span>
                        </a>
                  </li>
                  <li class="sidebar-item  has-sub @yield('rekapitulasi')">
                        <a href="/admin/riwayat-transaksi" class='sidebar-link'>
                           <i class="bi bi-stack"></i>
                           <span>Rekapitulasi</span>
                        </a>
                        <ul class="submenu ">
                           <li class="submenu-item ">
                              <a href="/admin/grafik-penjualan">Grafik Penjualan</a>
                           </li>
                           <li class="submenu-item ">
                              <a href="/admin/rekap-penjualan">Rekap Penjualan</a>
                           </li>
                            <li class="submenu-item ">
                              <a href="/admin/rekap-toko">Rekap Toko</a>
                           </li>
                        </ul>
                  </li>
                   <li class="sidebar-item @yield('pengaduan') ">
                        <a href="/admin/pengaduan" class='sidebar-link'>
                           <i class="bi bi-exclamation-diamond-fill"></i>
                           <span>Pengaduan</span>
                        </a>
                  </li>
                  <li class="sidebar-item  ">
                        <a  class='sidebar-link' href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                           <i class="bi bi-box-arrow-right"></i>
                           <span>Logout</span>
                           <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                           </form>
                        </a>
                  </li>
               </ul>
            </div>
            <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
      </div>
   </div>
   @yield('content')
</div>




</div>
   </script>
    <script src="{{asset ('assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{asset ('assets/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{asset ('assets/vendors/apexcharts/apexcharts.js') }}"></script>
    <script src="{{asset ('assets/js/pages/dashboard.js') }}"></script>

    <script src="assets/js/extensions/sweetalert2.js"></script>
    <script src="assets/vendors/sweetalert2/sweetalert2.all.min.js"></script>

    <script src="{{asset ('assets/js/main.js') }}"></script>
</body>

</html>