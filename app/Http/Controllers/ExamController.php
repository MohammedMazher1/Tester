<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function index(Request $request)
    {
        $viewData = [];
        $viewData["data"] = $request->all();
        return view('test')->with("viewData",$viewData) ;
    }
}
