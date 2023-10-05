<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    //

    public function index(){

        $codeEdu = Education::orderBy('created_at','desc')->get();
        return view('codingedu')->with('post', $codeEdu);

    }

    public function create(){
        return view('create_c_education');

    }

    public function store(){

    }

    public function delete(){

    }
    public function destroy(){

    }
}
