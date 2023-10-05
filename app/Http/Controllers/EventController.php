<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class EventController extends Controller
{
    //

    public function index(){
        
        $post = Event::orderBy('created_at','desc')->get();
        return view('events')->with('post', $post);
    }

        // Create event post
    public function create() {
        return view('create_event');
    }

    // / Store post
    public function store(Request $request) {
    // validations
    $request->validate([
        'title' => 'required',
        'description' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $event = new Event;

    $file_name = time() . '.' . request()->image->getClientOriginalExtension();
    request()->image->move(public_path('images'), $file_name);

    $event->title = $request->title;
    $event->description = $request->description;
    $event->image = $file_name;

    $event->save();
    return redirect()->route('events.index')->with('success', 'Post created successfully.');
    }

    public function deleteEvent(){
        $post = Event::orderBy('created_at','desc')->get();
        return view('destroy')->with('post', $post);

    }

    public function destroy(Request $request,Event $event){

       try {
        $event->delete();
        return redirect()->back()->with('success', 'Event deleted successfully');
    } catch (\Exception $e) {
        Log::error('Error deleting event: ' . $e->getMessage());
        return redirect()->back()->with('error', 'An error occurred while deleting the event.');
    }

    }
}
