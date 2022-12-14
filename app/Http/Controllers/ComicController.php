<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comic.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dataInput = $request ->all();

        $dataToBeValidated = $request->validate(
            [
                'title' => 'required|min:2|max:200|',
                'author' => 'required|min:2|max:80|',
                'completion_date' => 'required|date|',
                'type' => 'required',
                'description' => 'required|min:2|max:500|',
                'image_url' => 'required|min:2',
            ],
            [
                'title.required' => 'Per favore aggiungi almeno un titolo dai'
            ]
        );

        $comic = new Comic();
        $comic -> title = $dataInput['title']; 
        $comic -> description = $dataInput['description']; 
        $comic -> thumb = $dataInput['thumb']; 
        $comic -> price = $dataInput['price']; 
        $comic -> series = $dataInput['series']; 
        $comic-> sale_date = $dataInput['sale_date'];
        $comic -> type = $dataInput['type']; 

        $comic -> save();

        return redirect()->route('comics.show', compact('comic'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::findOrFail($id);
        return view('comic.index', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::findOrFail($id);   
        return view('comic.edit', compact('comic'));  
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
        $dataInput = $request ->all();

        // $comic = Comic::findOrFail($id);
        // $comic -> title = $dataInput['title']; 
        // $comic -> description = $dataInput['description']; 
        // $comic -> thumb = $dataInput['thumb']; 
        // $comic -> price = $dataInput['price']; 
        // $comic -> series = $dataInput['series']; 
        // $comic-> sale_date = $dataInput['sale_date'];
        // $comic -> type = $dataInput['type']; 

        // $comic -> save();
        $comic = Comic::findOrFail($id);
        $comic->update($dataInput);
        
        return redirect()->route('homepage', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic::findOrFail($id);
        $comic::destroy($id);

        return redirect()->route('homepage', $comic->id)->with('delete', $comic->title);

    }
}
