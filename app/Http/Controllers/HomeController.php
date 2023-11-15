<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Property;
use App\Models\PropertyValue;
use App\Models\Sermon;
use App\Models\Testimony;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use  App\Models\Team;
use App\Models\Gallery;

class HomeController extends Controller
{
    // methodes qui gere la page d'acceuil (la route / )
    function user(){
        $teams = Team::all();
        return view("user.index");
    }

    // methodes qui gere la page d'acceuil (la route / )
    function index(){
        $galleries = Gallery::orderBy('id', 'desc')->limit(6)->get();
        $teams = Team::all();
        return view("index", [
            "teams"=> $teams,
            "galleries"=> $galleries
        ]);
    }

    // Route contacts
    function contact(){
        return view("contact");
    }

    // Route about
    function about(){
        $teams = Team::all();
        return view("about", ["teams"=> $teams]);
    }

    function gallery(){
        $galleries = Gallery::all();
        return view("gallery", ["galleries"=> $galleries]);
    }

}
