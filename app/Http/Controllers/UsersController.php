<?php

namespace App\Http\Controllers;
use App\user;
use Illuminate\Http\Request;
use App\Exports\UsersExport;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;

class UsersController extends Controller
{
    public function showdata(){
        $data = User::all(); 
        return view('users',['users'=>$data]); 
      }

    public function export() 
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }
    public function import() 
    {
        Excel::import(new UsersImport,request()->file('file'));
           
        return back();
        
}
}