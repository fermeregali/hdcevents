<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    //
    public function index() {

        $events= Event::all(); //get all records
    
        return view('welcome', ['events' => $events]);
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

    public function store(Request $request) {


        $event = new Event;

        $event->title = $request->title;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->description = $request->description;

        $event->save();

        return redirect('/');

    }
}
