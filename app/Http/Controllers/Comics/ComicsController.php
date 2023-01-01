<?php

namespace App\Http\Controllers\Comics;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
        $comicses = Comic::all();
        return view('comics.index', compact('comicses'));
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
        $validated = $request->validate(
            [
                'title' => 'required',
                'description' => 'bail|required|min:5|max:300',
                'thumb' => 'required',
                'price' => 'required',
                'series' => 'required',
                'sale_date' => 'required',
                'type' => 'required'
            ]
        );
        $data = $request->all();
        $addedComic = new Comic();
        $addedComic->fill($data);
        $addedComic->save();

        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $comic = Comic::findOrFail($id);
        // is the same thing
        $comic = Comic::find($id);
        if ($comic === null) {
            abort('Page not found');
        }
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comicToChange = Comic::findOrFail($id);
        // $comicToChange = Comic::find($id);
        // if ($comicToChange === null) {
        //     abort('Page not found');
        // }
        return view('comics.edit', compact('comicToChange'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dataUpdated = $request->all();
        $comic = Comic::findOrFail($id);
        $comic->update($dataUpdated);
        return redirect()->route('comics.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comicToDelete = Comic::findOrFail($id);
        $comicToDelete->delete();
        return redirect()->route('comics.index');
    }
}
