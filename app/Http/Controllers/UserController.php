<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Trainer;
use App\Models\Trainee;
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
        if($request->input("type") == 'trainer') {
            $user->trainer()->create();
        }else{
            $user->trainee()->create();
        }
         return redirect()->route("users.index");
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
        $user = User::find($id);

        return view("user.edit", compact("user"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $user=User::find($id)->update($request->all());
        User::saved($user);
        if (!$user) {
            // Handle the case where the user is not found
            return response()->json(['error' => 'User not found'], 404);
        }
        if (isset($user->trainer)) {
            // Delete the corresponding Trainer record
            $user->trainer->delete();
            // Create a new Trainee record
            $user->trainee()->create();
            // Set other trainee attributes as needed

        }elseif(isset($user->trainee)){
            $user->trainee->delete();
            $user->trainer()->create();
            // Delete the corresponding Trainer record
        }
        return redirect()->route("users.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::find($id)->delete();
        return redirect()->route("users.index");
    }
}
