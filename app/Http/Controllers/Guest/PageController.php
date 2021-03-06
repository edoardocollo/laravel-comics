<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Comic;
use App\Must;
use App\Serie;
class PageController extends Controller
{
  public function index(){
    $comics = Comic::all();
    $musts = Must::all();
    $series = Serie::all();
    return view('guest.welcome',compact('comics','musts','series'));
  }
  public function show($comic){

    $comic = Comic::find($comic);
    return view('guest.show_content', compact('comic'));
  }
}
