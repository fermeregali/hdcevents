<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    //
    public function index() {

        $search = request('search');

        if( $search) {

            $events = Event::where([
                ['title','like','%'.$search.'%']
            ])->get();

        } else {
            $events= Event::all(); //get all records
        }

       
    
        return view('welcome', ['events' => $events,'search' => $search]);
    }

    public function create() {

        return view('events.create');
    }

    public function contact() {

        return view('contact');
    }

    public function products() {
        
        $busca = request('search'); //uso do request
        return view('products',['busca' => $busca]);
    }

    public function produtos_teste($id=null){

        return view('product', ['id' => $id]);
    }

    public function store(Request $request) { //action for save database


        $event = new Event;

        $event->title = $request->title;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->description = $request->description;
        $event->items = $request->items;
        $event->date = $request->date;

        //imagem upload

        if ($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension ;
            $requestImage->move(public_path('img/events'), $imageName);

            $event->image = $imageName; 
        }

        $event->save();

        return redirect('/')->with('msg','Evento criado com sucesso!'); // with flash message for user.

    }

    public function show($id) {

        $event = Event::findOrFail($id);

        return view('events.show', ['event' => $event]);

    }



}
