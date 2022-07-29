<?php

namespace App\Http\Controllers;

use App\Models\StudentRecord;
use Illuminate\Http\Request;

class StudentRecordController extends Controller
{
   
    public function index()
    {
        return StudentRecord::all();
    }

  
    public function store(Request $request)
    {
        $data = new StudentRecord();
        $data->name = $request->name;
        $data->contact = $request->contact;
        $data->email = $request->email;
        $data->save();

        return ["error"=> "data inserted successfully"];
    }

    
    public function show(StudentRecord $studentRecord)
    {
        //
    }

  
    public function update(Request $request, StudentRecord $studentRecord)
    {
        //
    }

  
    public function destroy(StudentRecord $studentRecord)
    {
        //
    }
}
