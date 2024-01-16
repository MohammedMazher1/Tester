<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exam;
use App\Models\Trainee;
use App\Models\ExamResult;
use App\Models\Program;
use App\Models\Trainer;

class AdminController extends Controller
{
    public function home(){
        $trainees = Trainee::all()->count();
        $trainers = Trainer::all()->count();
        $programs = Program::all()->count();
        $exams = Exam::all()->count();
        $examResults = ExamResult::all()->count();
        return view('admin.dashbord',compact('trainees','trainers','programs','exams','examResults'));
    }
    public function index(){
        $exams = Exam::all();
        return view('admin.examList',compact('exams'));
    }

    public function list($id){
        $traineesPre = [];
        $traineesPost = [];
        $trainees_IDs = [];
        $exam = Exam::find($id);
        $total = $exam->questions->count();

        $examPreResults = ExamResult::where('exam_id','=',$id)->where('exam_status', '=', 'pre')->get();
        $examPostResults = ExamResult::where('exam_id','=',$id)->where('exam_status', '=', 'post')->get();

        foreach( $examPreResults as $examResult){
            $trainee['name']=$examResult->trainee->user()->get('name');
            $trainee['email']=$examResult->trainee->user()->get('email');
            $trainee['gender']=$examResult->trainee->user()->get('gender');
            if($examResult->exam_status == 'pre'){
                $totalTrueOptios = 0;
                foreach($examResult->examResultDetails as $examResultDetiles){
                    if($examResultDetiles->option->status == 1){
                        $totalTrueOptios++;
                    }
                }
            }
            $trainee['totalTrueOptios']=$totalTrueOptios;
            $trainee['total']=$total;
            $trainee['exam_status']=$examResult->exam_status;
            $trainee['id']=$examResult->id;
            array_push($traineesPre, $trainee);
        }
        foreach( $examPostResults as $examResult){
            $trainee['name']=$examResult->trainee->user()->get('name');
            $trainee['email']=$examResult->trainee->user()->get('email');
            $trainee['gender']=$examResult->trainee->user()->get('gender');
            if($examResult->exam_status == 'post'){
                $totalTrueOptios = 0;
                foreach($examResult->examResultDetails as $examResultDetiles){
                    if($examResultDetiles->option->status == 1){
                        $totalTrueOptios++;
                    }
                }
            }
            $trainee['totalTrueOptios']=$totalTrueOptios;
            $trainee['total']=$total;
            $trainee['exam_status']=$examResult->exam_status;
            $trainee['id']=$examResult->id;
            array_push($traineesPost, $trainee);
        }
        $traineesDetails = array('traineesPre'=>$traineesPre,'traineesPost'=>$traineesPost);
        return view('admin.index',compact('traineesDetails'));
    }
}
