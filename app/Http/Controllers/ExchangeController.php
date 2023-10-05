<?php

namespace App\Http\Controllers;

use App\Models\Exchange;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ExchangeController extends Controller
{
    //
    public function index(){

        $exchange = Exchange::latest()->first();
        return view('digital_exchange')->with('exchange', $exchange);
        // $exchange = Exchange::orderBy('created_at','desc')->get();
        // return view('digital_exchange')->with('exchange', $exchange);

    }

    public function create(){

        return view('create_d_exchange');

    }

    public function store(Request $request){
        // / validations
        $request->validate([
        'title' => 'required',
        'description' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $exchange = new Exchange;
        // dd(1);
        $file_name = time() . '.' . request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images'), $file_name);

        $exchange->title = $request->title;
        $exchange->description = $request->description;
        $exchange->image = $file_name;

        $exchange->save();
        return redirect()->route('d_exchange.codingEducation')->with('success', 'Post created successfully.');
    }

    public function delete(){

        $post =Exchange::orderBy('created_at','desc')->get();

        return view('exchange_deletion')->with('post', $post);


    }
    public function destroy(Request $request,Exchange $exchange){
        try {
            $exchange->delete();

            return redirect()->back()->with('success', 'Event Deleted Successfully');
        } catch (\Exception $e) {

            Log::error('Error deleting event: ' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred while deleting the event.');
        }
        
    }
}
