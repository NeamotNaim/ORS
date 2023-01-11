<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobCategory;

class JobController extends Controller
{
    //
    public function index(){
        return view('admin/jobs/index');
    }
     public function category(){
        return view('admin/jobs/job_category');
    }
    public function category_create(){
        return view('admin/jobs/job_category_create');
    }
    public function category_store(Request $request){

         $validatedData = $request->validate([
            'category_name' => 'required|unique:job_category',
            'description' => 'required',
            
        ]);
        $student=JobCategory::create($request->all()); 
        return  redirect()->route('admin.jobs.category')->with('Successfully Inserted Category');
    }
    
}
