<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();

        return view("user.index", compact("users"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view("user.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $creationData = $request->only(["name","email","gender","phone","type"]);
        $creationData["password"] = Hash::make($request->phone);
        $creationData["user_name"] = $request->phone;
        $user = User::create($creationData);
         // Create a trainer for the user
         $user->trainer()->create();
         return view("user.index");
     }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
