<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\User;

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

        //save user id
        $user = auth()->user();
        $event->user_id = $user->id; 

        $event->save(); //persist no banco
        
        return redirect('/')->with('msg','Evento criado com sucesso!'); // with flash message for user.

    }

    public function show($id) {

        $event = Event::findOrFail($id);

        $eventOwner =  User::where('id', $event->user_id)->first()->toArray(); // use model user with where and first and convert to array

        return view('events.show', ['event' => $event, 'eventOwner' => $eventOwner]);

    }

    



}
