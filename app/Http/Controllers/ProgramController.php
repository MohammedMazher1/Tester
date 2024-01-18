<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Program;
use App\Models\Trainer;
use Exception;
use Illuminate\Routing\RedirectController;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $programs = Program::paginate(8);;
        return view("program.index", compact("programs"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $trainers  = Trainer::all();
        return view("program.create", compact("trainers"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $request->validate([
                "name" => "required|max:255",
                "description" => "required",
                "trainer_id" => "required",
                ]);
            }catch(Exception $e){
                return redirect()->back()->with('error','جميع الحقول مطلوبة');
            }
            try{
                $program = $request->only("name","description","trainer_id");
                $program = Program::create($program);

            }catch(Exception $e){
                return redirect()->back()->with('error','حدث خطاء في تخزين البيانات');
            }

         return redirect()->route("programs.index");
     }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $program = Program::find($id);
        $trainers = Trainer::all();
        return view("program.edit", compact("program"))->with("trainers", $trainers);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try{
            $request->validate([
                "name" => "required|max:255",
                "description" => "required",
                "trainer_id" => "required",
                ]);
            }catch(Exception $e){
                return redirect()->back()->with('error','جميع الحقول مطلوبة');
            }
            try{
                Program::find($id)->update($request->all());

            }catch(Exception $e){
                return redirect()->back()->with('error','حدث خطاء في تعديل البيانات');
            }
        return redirect()->route("programs.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try{

            Program::find($id)->delete();
        }
        catch(Exception $e){
            return redirect()->back()->with('حدث خطاء في عملية الحذف');
        }
        return redirect()->route("programs.index");
    }
}
