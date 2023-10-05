<?php

namespace App\Http\Controllers;

use App\Models\Ict;
use Illuminate\Http\Request;

class IctController extends Controller
{
    //
    public function index(){
        $ict = Ict::orderBy('created_at','desc')->get();
        return view('donations')->with('post', $ict);

    }

    public function create(){
        return view('create_ict_donations');

    }

    public function store(){

    }

    public function delete(){

    }
    public function destroy(){
        
    }
}
