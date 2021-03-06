<?php

namespace App\Http\Controllers\Admin;

use App\Comic;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class ComicController extends Controller
{


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('admin.comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
          'titolo' => 'required',
          'prezzo' => 'required',
          'disponibilita' => 'required',
          'descrizione' =>'required',
          'serie' => 'required',
          'volume' => 'required',
          'pagine' => 'required',
          'img' => 'required | max:500'
        ]);


        $img = Storage::disk('public')->put('posts_img', $request->img);
        $newComic = new Comic;
        $newComic->titolo = $request->titolo;
        $newComic->prezzo = $request->prezzo;
        $newComic->disponibilita = $request->disponibilita === 'on'?true:false ;
        $newComic->descrizione = $request->descrizione;
        $newComic->serie = $request->serie;
        $newComic->volume = $request->volume;
        $newComic->pagine = $request->pagine;
        $newComic->img = $img;
        $newComic->save();
        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show( $comic)
    {
        $comic = Comic::find($comic);
        return view('admin.comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit($comic)
    {
        $comic = Comic::find($comic);
        return view('admin.comics.edit',compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $comic)
    {


        $request->validate([
          'titolo' => 'required',
          'prezzo' => 'required',
          'disponibilita' => 'required',
          'descrizione' =>'required',
          'serie' => 'required',
          'volume' => 'required',
          'pagine' => 'required',
          'img' => 'required | max:500'
        ]);

        $comic = Comic::find($comic);
        Storage::delete('posts_img', $comic->img);
        $img = Storage::disk('public')->put('posts_img', $request->img);
        $comic->titolo = $request->titolo;
        $comic->prezzo = $request->prezzo;
        $comic->disponibilita = $request->disponibilita === 'on'?true:false ;
        $comic->descrizione = $request->descrizione;
        $comic->serie = $request->serie;
        $comic->volume = $request->volume;
        $comic->pagine = $request->pagine;
        $comic->img = $img;
        $comic->update();
        return redirect()->route('comics.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy( $comic)
    {
        $comic = Comic::find($comic);
        $comic->delete();
        return redirect()->route('comics.index');

    }
}
