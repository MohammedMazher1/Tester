<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exam;

class AdminController extends Controller
{
    public function index(){
        $exams = Exam::all();
        // dd($exams);
        return $exams;
    }
}
