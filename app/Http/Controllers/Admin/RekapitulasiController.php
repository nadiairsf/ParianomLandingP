<?php

namespace App\Http\Admin\Controllers;

use Illuminate\Http\Request;
use App\Exports\RekapExport;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Contracts\View\View;

class RekapitulasiController extends Controller
{
   
    public function export(){
    
        
        // mengambil data
      
        return Excel::download(new RekapExport,'rekap.xlsx');

        
    }

}
