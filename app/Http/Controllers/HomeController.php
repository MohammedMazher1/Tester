<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Exception;
use PhpParser\Node\Stmt\TryCatch;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        try{
            if(Auth::user()){
                if(Auth::user()->type=='trainer'){
                    return redirect()->route('exams.home');
                }elseif(Auth::user()->type=='admin'){
                    return redirect()->route('admin');
                }
            }
         }catch(Exception $e){
             return view('notFound');
         }

         return view('welcome');
    }
}
