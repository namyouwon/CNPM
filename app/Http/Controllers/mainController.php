<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class mainController extends Controller
{
    //
    public function index(){
        return view('index');
    }
    public function employee(){
        return view('employee');
    }
    public function MCP(){
        return view('MCP');
    }
    public function vehicle(){
        return view('vehicle');
    }
    public function detail(){
        return view('viewDetail');
    }
    public function edit(){
        return view('edit');
    }
    public function main(){
        return view('iframe');
    }
}
