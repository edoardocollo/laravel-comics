<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Must;
use Illuminate\Http\Request;

class MustController extends Controller
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
        $musts = Must::all();
        return view('admin.musts.index', compact('musts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.musts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newMust = new Must;
        $newMust->titolo = $request->titolo;
        $newMust->sottotitolo = $request->sottotitolo;
        $newMust->contenuto = $request->contenuto;
        $newMust->img = 'img';
        $newMust->save();
        return redirect()->route('musts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Must  $must
     * @return \Illuminate\Http\Response
     */
    public function show( $must)
    {
        $must = Must::find($must);
        return view('admin.musts.show', compact('must'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Must  $must
     * @return \Illuminate\Http\Response
     */
    public function edit( $must)
    {
        $must = Must::find($must);
        return view('admin.musts.edit', compact('must'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Must  $must
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $must)
    {
        $must = Must::find($must);
        $must->titolo = $request->titolo;
        $must->sottotitolo = $request->sottotitolo;
        $must->contenuto = $request->contenuto;
        $must->update();
        return redirect()->route('musts.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Must  $must
     * @return \Illuminate\Http\Response
     */
    public function destroy( $must)
    {
        $must = Must::find($must);
        $must->delete();
        return redirect()->route('musts.index');

    }
}
