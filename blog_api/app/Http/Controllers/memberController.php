<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class memberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // return ['result'=>"list of members"];
        // testing with student table
        $student=student::all();
        return ['result'=>$student];
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // it is called when we create a new member using get method
        return ['result'=>"create a new member"];
        
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // it is called when we create a new member using post method
        return ['result'=>"create a new member"];
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
        // it is called when we update a member using put method
        return ['result'=>"update a member"];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
