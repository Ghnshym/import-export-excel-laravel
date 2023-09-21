<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\UsersExport;
use Excel;
use App\Imports\UsersImport;
use App\Models\User;

class UserController extends Controller
{
    public function exportUser(){
        // dd('exportUser');
        return Excel::download(new UsersExport, 'user.xlsx');
    }

    public function importUser(Request $request){
        // dd("importUser");
        $request->validate([
            'file' => 'required|mimes:xls,xlsx',
        ]);

        Excel::import(new UsersImport, $request->file('file'));

        return redirect()->back()->with('success', 'Data imported successfully.');



    }

    public function renderData(){
        $users = User::all();

        return view('data', compact('users'));
    }
}
