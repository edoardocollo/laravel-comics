<?php

namespace App\Http\Controllers\Admin;

use App\Comic;
use App\Artist;
use App\Writer;
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
      $artists = Artist::all();
      $writers = Writer::all();
      return view('admin.comics.create', compact('artists','writers'));
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
          'img' => 'required | max:500',
          'jumbo' => 'required | max:500',
          'artisti' => 'exists:artists,id',
          'autori' => 'exists:writers,id'
        ]);


        $img = Storage::disk('public')->put('posts_img', $request->img);
        $jumbo = Storage::disk('public')->put('posts_img', $request->jumbo);
        $newComic = new Comic;
        $newComic->titolo = $request->titolo;
        $newComic->prezzo = $request->prezzo;
        $newComic->disponibilita = $request->disponibilita === 'on'?true:false ;
        $newComic->descrizione = $request->descrizione;
        $newComic->serie = $request->serie;
        $newComic->volume = $request->volume;
        $newComic->pagine = $request->pagine;
        $newComic->img = $img;
        $newComic->jumbo = $jumbo;
        $newComic->save();
        $newComic->artists()->attach($request->artisti);
        $newComic->writers()->attach($request->autori);

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
        $artists = Artist::all();
        $writers = Writer::all();
        $comic = Comic::find($comic);
        return view('admin.comics.edit',compact('comic','artists','writers'));
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
          'img' => 'required | max:500',
          'jumbo' => 'required | max:500',
          'artisti' => 'exists:artists,id',
          'autori' => 'exists:writers,id'
        ]);

        $comic = Comic::find($comic);
        Storage::delete('posts_img', $comic->img);
        Storage::delete('posts_img', $comic->jumbo);
        $img = Storage::disk('public')->put('posts_img', $request->img);
        $jumbo = Storage::disk('public')->put('posts_img', $request->jumbo);
        $comic->titolo = $request->titolo;
        $comic->prezzo = $request->prezzo;
        $comic->disponibilita = $request->disponibilita === 'on'?true:false ;
        $comic->descrizione = $request->descrizione;
        $comic->serie = $request->serie;
        $comic->volume = $request->volume;
        $comic->pagine = $request->pagine;
        $comic->img = $img;
        $comic->jumbo = $jumbo;
        $comic->update();
        $comic->artists()->sync($request->artisti);
        $comic->writers()->sync($request->autori);

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
