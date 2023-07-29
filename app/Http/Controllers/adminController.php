<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class adminController extends Controller
{
    public function redirectpage(){
        
        $role = Auth::user()->role;

        if ($role == 1){
            return view('admin.index');
        }

        if ($role == 2){
            return view('/dashboard');
        }

        if($role == 3){
            return view('candidat.index');
        }
    }
}
