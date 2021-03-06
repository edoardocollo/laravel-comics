<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Writer;
use Illuminate\Http\Request;

class WriterController extends Controller
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

        $writers = Writer::all();
        return view('admin.writers.index', compact('writers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.writers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request = $request->validate([
          'nome' => 'required',
        ]);

        $writer = new Writer;
        $writer->nome = $request->nome;
        $writer->save();
        return redirect()->route('writers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Writer  $writer
     * @return \Illuminate\Http\Response
     */
    public function show($writer)
    {
        $writer = Writer::find($writer);

        return view('admin.writers.show', compact('writer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Writer  $writer
     * @return \Illuminate\Http\Response
     */
    public function edit( $writer)
    {
        $writer = Writer::find($writer);
        return view('admin.writers.edit', compact('writer'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Writer  $writer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $writer)
    {

        $request = $request->validate([
          'nome' => 'required',
        ]);

        $writer = Writer::find($writer);
        $writer->nome = $request->nome;
        $writer->update();
        return redirect()->route('writers.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Writer  $writer
     * @return \Illuminate\Http\Response
     */
    public function destroy( $writer)
    {
        $writer= Writer::find($writer);
        $writer->delete();
        return redirect()->route('writers.index');
    }
}
