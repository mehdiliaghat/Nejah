<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function PHPSTORM_META\type;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if(Auth::user()->type=='Student') {
            return view('student.master');
        }
        else if (Auth::user()->type== 'Prof'){
            return view('prof.master');
        }
        else if (Auth::user()->type=='Manager'){
            return view('manager.master');
        }
        else if (Auth::user()->type=='Operator'){
            return view('operator.master');
        }
        else if (Auth::user()->type=='Employee') {
            return view('employee.master');
        }
        else{
            return 'error';
        }

           // return view('layouts.master');

    }
}
