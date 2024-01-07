<?php

namespace App\Http\Controllers;

use DateTime;
use Illuminate\Http\Request;
use App\Models\Exam;
use App\Models\Trainee;
use App\Models\ExamResult;
use App\Models\ExamResultDetails;
use Illuminate\Support\Facades\Auth;

use DateTimeImmutable;
class ExamController extends Controller
{
    public function index(Request $request)
    {
        $user = '';
        if(Auth::check()){
            $user = auth()->user();
        }
        return view('exam.index',compact('user'));
    }
    public function create()
    {

        return view("exam.create");
    }
    public function store(Request $request){
        $user = auth()->user();
        $examData = [];
        $data = $request->all();
        $exam = json_decode($data['quizArray']);
        $examData['name']= $exam[0]->exam_name;
        $examData['trainer_id']= $user->trainer->id;
        $examData['date_of_preTest']= $exam[0]->date_of_preTest.' '.$exam[0]->time_of_preTest;
        $examData['date_of_postTest']= $exam[0]->date_of_postTest.' '.$exam[0]->time_of_postTest;
        $newexam = Exam::create($examData);
        $questions = [];
        for($i = 1; $i < count($exam) ; $i++){
            $questions['question'] = $exam[$i]->question;
            $questions['exam_id'] = $newexam->id;
            $question = $newexam->questions()->create($questions);
            $options = get_object_vars($exam[$i]->options);
            foreach($options as $key => $value){
                $option = array(
                    'status' => $value == "false" ? false : true,
                    'option'=> $key,
                    'question_id'=> $question->id
                );
                $question->options()->create($option);
            }
        };

        return  view('exam.newTest');
    }
    public function show(Request $request)
    {

        $storedTime = new DateTimeImmutable('2024-01-04 2:10:00 AM');
        $serverDateTime = new DateTime();
        $serverTime = $serverDateTime->format('Y-m-d H:i:s');
        $currentTime = new DateTimeImmutable($serverTime);
        $interval = $currentTime->diff($storedTime);
        // Calculate the interval in minutes
        $intervalInMinutes = $interval->days * 24 * 60 + $interval->h * 60 + $interval->i;
        $exam = Exam::find(48);

        // if (is_string($exam->date_of_preTest)) {
        //     $examDate = new DateTime($exam->date_of_preTest);
        // }

        // $testDate = $exam->date_of_preTest->format('Y-M-D');
        if ($intervalInMinutes >= 0 && $intervalInMinutes <= 10) {
            return view('test.show',compact('exam'))->with('timer',$intervalInMinutes);
        } else{
            return "no exam in this time";
        }
    }

    public function result(Request $request){
        // $testDate = new DateTime('2024-01-03 21:30:00');
        $options = ['28','31','32'];
        $data = json_decode($request->exam);
        $user = auth()->user();

        $newResult=[];
        $newResult['trainee_id'] = $user->trainee->id;
        $newResult['exam_id'] = $data->exam_id;
        $newResult['exam_status'] ='pre';
        $result = ExamResult::create($newResult);

        $newOption = [];
        $newOption['exam_result_id']=$result->id;
        foreach($data->options as $option_id){
            $newOption['option_id']=$option_id;
            ExamResultDetails::create($newOption);
        }
        return $request->exam;
    }
}


