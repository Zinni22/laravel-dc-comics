<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// MODELS
use App\Models\Comic;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics=Comic::all();

        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //prendo tutti i dati messi nel form
        $data = $request->all();

        //creo la nuova istanza
        $newComic = new Comic;
            $newComic->title = $data['title'];
            $newComic->series = $data['series'];
            $newComic->sale_date = $data['sale_date'];
            $newComic->type = $data['type'];
        $newComic->save();

        //rimando la pagina alla show
        return redirect()->route('comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comics=Comic::FindOrFail($id);

        return view('comics.show', compact('comics'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comics=Comic::FindOrFail($id);

        return view('comics.edit', compact('comics'));
    }

    /**
     * Update the specified resource in storage.
     
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();

        //creo la nuova istanza
        $comics=Comic::FindOrFail($id);
            $comics->title = $data['title'];
            $comics->series = $data['series'];
            $comics->sale_date = $data['sale_date'];
            $comics->type = $data['type'];
        $comics->save();

        //rimando la pagina alla show
        return redirect()->route('comics.show', $comics->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //recupero l'istanza da eliminare
        $comics=Comic::FindOrFail($id);

        //elimino l'istanza
        $comics->delete();

        //rimando all'index
        return redirect()->route('comics.index');

    }
}
