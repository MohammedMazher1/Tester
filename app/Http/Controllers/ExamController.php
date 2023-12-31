<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exam;
class ExamController extends Controller
{
    public function index(Request $request)
    {
        // $viewData = [];
        // $viewData["data"] = $request->all();
        return view('test.newTest');
    }
    public function store(Request $request){
        $examData = [];
        $data = $request->all();
        $exam = json_decode($data['quizArray']);
        $examData['name']= $exam[0]->exam_name;
        $examData['date_of_preTest']= $exam[0]->date_of_preTest;
        $examData['date_of_postTest']= $exam[0]->date_of_postTest;
        $newexam = Exam::create($examData);
        // $examData['trainer_id']= 14;
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

        return  view('test.newTest');
    }
}

// $data = $request->all();
// $exam = json_decode($data['quizArray']);

// return var_dump($exam);
