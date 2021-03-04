<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Serie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class SerieController extends Controller
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
        $series = Serie::all();
        return view('admin.series.index', compact('series'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.series.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $img = Storage::disk('public')->put('posts_img', $request->img);
        $serie = new Serie;
        $serie->serie = $request->serie;
        $serie->img = $img;
        $serie->save();
        return redirect()->route('series.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Serie  $serie
     * @return \Illuminate\Http\Response
     */
    public function show( $serie)
    {
        $serie = Serie::find($serie);
        return view('admin.series.show', compact('serie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Serie  $serie
     * @return \Illuminate\Http\Response
     */
    public function edit( $serie)
    {
        $serie = Serie::find($serie);

        return view('admin.series.edit', compact('serie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Serie  $serie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $serie)
    {
        $serie = Serie::find($serie);
        $serie->serie = $request->serie;
        $serie->update();
        return redirect()->route('series.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Serie  $serie
     * @return \Illuminate\Http\Response
     */
    public function destroy( $serie)
    {
        $serie = Serie::find($serie);
        $serie->delete();
        return redirect()->route('series.index');

    }
}
