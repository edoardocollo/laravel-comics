<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Comic;
use App\Must;
class PageController extends Controller
{
    public function index(){
      $comics = Comic::all();
      $musts = Must::all();
      return view('guest.welcome',compact('comics','musts'));
    }
}
