<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $code=$this->generateUniqueCode();
        $user=User::create([
            
            'name'=>$request->name,
            'email'=>$request->email,
            'organization'=>$request->organization,
            'job_title'=>$request->job_title,
            'phone'=>$request->phone,
            'code'=>$code,
        ]);
        return view('code', compact('code'));
    }
    
    public function checkCode(Request $request)
{
    $flag=false;
    $this->validate($request, [
        'code' => 'required', // Add more validation rules if needed
    ]);

    $code = User::where('code', $request->code)->first();

    if ($code) {
        $flag=true;
        // Code matches, redirect to another page and pass the code
        return view('userWelcome');

    } else {
        $flag=false;
        // Code does not match, return an error
        return view('incorrectCode');
        //return back()->with('error', 'Invalid code. Please try again.');
    }
}


    private function generateUniqueCode()
    {
        $characters = '0123456789';
        $code = '';
        do {
            $code = '';
            for ($i = 0; $i < 9; $i++) {
                $code .= $characters[rand(0, strlen($characters) - 1)];
            }
        } while (User::where('code', $code)->exists());

        return $code;
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
