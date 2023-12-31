<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Program;
use App\Models\Trainer;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $programs = Program::all();
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
        $program = $request->only("name","description","trainer_id");
        $program = Program::create($program);
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

        Program::find($id)->update($request->all());
        return redirect()->route("programs.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Program::find($id)->delete();
        return redirect()->route("programs.index");
    }
}
