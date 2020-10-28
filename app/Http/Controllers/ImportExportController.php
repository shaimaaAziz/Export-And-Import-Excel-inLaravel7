<?php

namespace App\Http\Controllers;

use App\Imports\BulkImport;
use App\Exports\UsersExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ImportExportController extends Controller
{

    
    public function importExportView()
    {
       return view('importexport');
    }
    public function import(Request $request) 
    {

        $this->validate($request ,[
            'file'=>'required|mimes:xls,xlsx'

        ]); 
        Excel::import(new BulkImport,request()->file('file'));
           
        return back()->with('success', 'Excel Data Imported successfully.');
    }

    public function export() 
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }
   
}