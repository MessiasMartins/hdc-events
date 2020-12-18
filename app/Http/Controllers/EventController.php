<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Event;

class EventController extends Controller
{
    public function index() {

        $events = Event::all();

        return view('home', ['events' => $events]);
    }

    public function create() {
        return view('events.create');
    }

    public function store(Request $request) {
        $event = new Event;

        $event->title = $request->title;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->description = $request->description;
        $event->items = $request->items;

        // Image Upload
        if($request->hasFile('image') and $request->file('image')->isValid()) {
            $request_image = $request->image;
            
            $extension = $request_image->extension();

            $image_name = md5($request_image->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $request->image->move(public_path("img/events"), $image_name);

            $event->image = $image_name;
        }

        $event->save();

        return redirect('/')->with('msg', 'Evento criado com sucesso!');
    }

    public function show($id) {

        $event = Event::findOrFail($id);

        return view('events.show', ['event' => $event]);
    
    }
}
