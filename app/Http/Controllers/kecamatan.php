<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kecamatan extends Controller
{
    public function getKecamatan(Request $request){
        $get = \App\Models\kecamatan::all()->toArray();
        if ($get!=null){
            $value['message']='success';
            $value['data']=$get;
        }else{
            $value['message']='fail';
        }
        return response()->json($value);
    }
}
