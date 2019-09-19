<?php

namespace App\Http\Controllers;
use App\Register;
use Illuminate\Http\Request;
use App\Exports\RegistersExport;
use App\Imports\RegistersImport;
use Maatwebsite\Excel\Facades\Excel;
class RegisterController extends Controller
{
    public function index(){
        $data = Register::all(); 
        return view('register',['registers'=>$data]); 
    }
    public function export(){
        return Excel::download(new RegistersExport,'registers.xlsx');
    }

    public function import(){
        Excel::import(new RegistersImport,request()->file('file'));
        return back();
    }
}
