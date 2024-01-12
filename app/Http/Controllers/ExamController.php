<?php

namespace App\Http\Controllers;

use DateTime;
use Illuminate\Http\Request;
use App\Models\Exam;
use App\Models\User;
use App\Models\Trainee;
use App\Models\ExamResult;
use App\Models\Question;
use App\Models\ExamResultDetails;
use Illuminate\Support\Facades\Auth;

use DateTimeImmutable;
class ExamController extends Controller
{
    public function home(Request $request)
    {
        $user = '';
        if(Auth::check()){
            $user = auth()->user();
        }
        return view('exam.home',compact('user'));
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

        return  view('exam.home');
    }

    public function index()
    {
        $id = auth()->user()->trainer->id;
        $exams = Exam::where("trainer_id",$id)->get();
        // return $exams[0]->name;
        return view("exam.index", compact("exams"));
    }

    public function edit(string $id)
    {
        $exam = Exam::find($id);

        return view("exam.edit", compact("exam"));
    }
    public function update(Request $request, string $id)
    {
        $user = auth()->user();
        $examData = [];
        $data = $request->all();
        $exam = json_decode($data['quizArray']);
        $examData['name']= $exam[0]->exam_name;
        $examData['trainer_id']= $user->trainer->id;
        $examData['date_of_preTest']= $exam[0]->date_of_preTest.' '.$exam[0]->time_of_preTest;
        $examData['date_of_postTest']= $exam[0]->date_of_postTest.' '.$exam[0]->time_of_postTest;
        $newexam = Exam::find($id);
        $newexam->update($examData);
        // return $newexam->questions[0]->question;
        $questions = [];
        for($i = 1; $i < count($exam) ; $i++){
            $questions['question'] = $exam[$i]->question;
            $questions['exam_id'] = $newexam->id;
            $newexam->questions[$i-1]->update($questions);
            $question = Question::where('question', $exam[$i]->question)->where('exam_id',$newexam->id)->get();
            $options = get_object_vars($exam[$i]->options);
            $count = 0;
            foreach($options as $key => $value){
                $option = array(
                    'status' => $value == "false" ? false : true,
                    'option'=> $key,
                    'question_id'=> $question[0]->id
                );
                 $question[0]->options[$count]->update($option);
                 $count++;
            }
        };

        return view('exam.home');
    }
    public function show()
    {
        $exam = Exam::find(80);
        $storedTime = new DateTimeImmutable('2024-01-11 3:40:00 PM');
        $serverDateTime = new DateTime();
        $serverTime = $serverDateTime->format('Y-m-d H:i:s');
        $currentTime = new DateTimeImmutable($serverTime);
        // Calculate the difference
        $interval = $currentTime->diff($storedTime);
        // Get the total minutes
        $minutes = $interval->days * 24 * 60 + $interval->h * 60 + $interval->i;
        $minutes++;
        if($minutes >= 10){
            return view('exam.NoExam');
        }
        return view('exam.show', compact('exam'))->with('timer',$minutes);

        // if (is_string($exam->date_of_preTest)) {
        //     $examDate = new DateTime($exam->date_of_preTest);
        // }

        // $testDate = $exam->date_of_preTest->format('Y-M-D');
        // if ($intervalInMinutes >= 0 && $intervalInMinutes <= 10) {
        //     return view('test.show',compact('exam'))->with('timer',$intervalInMinutes);
        // } else{
        //     return "no exam in this time";
        // }
    }

    public function result(Request $request){
        // $testDate = new DateTime('2024-01-03 21:30:00');
        $data = json_decode($request->exam);
        $user = auth()->user();
        
        $newResult=[];
        $newResult['trainee_id'] = $user->trainee->id;
        $newResult['exam_id'] = $data->exam_id;
        $newResult['exam_status'] ='post';
        $result = ExamResult::create($newResult);
        $result->save();
        $newoptions = [];
        // $newOption['exam_result_id']=$result->id;
        foreach($data->options as $option_id){
            $newoptions['option_id'] = $option_id;
            $result->examResultDetails()->create($newoptions);
        }
        // ExamResultDetails::create($newOption);
        return redirect()->Route('index');
    }
}


