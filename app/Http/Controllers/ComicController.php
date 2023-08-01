<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;

use App\Models\Comic;
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
        $comics = Comic::all();

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
     
        $form_data = $this->validation($request->all());



        $comic = new Comic();

        // $comic->title=$form_data['title'];
        // $comic->description=$form_data['description'];
        // $comic->thumb=$form_data['thumb'];
        // $comic->cover_image=$form_data['cover_image'];
        // $comic->price=$form_data['price'];
        // $comic->series=$form_data['series'];
        // $comic->sale_date=$form_data['sale_date'];
        // $comic->artists=$form_data['artist'];
        // $comic->writers=$form_data['writers'];
        $comic->fill($form_data);
        
        $comic->save();

        return redirect()-> route('comics.show', ['comic'=> $comic->id]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::findOrFail($id);

        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $form_data = $this->validation($request->all());

        $comic->update($form_data);

        return redirect()->route('comics.show',compact('comic'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index');
    }

    private function validation($data){

        $validator = Validator::make($data,
            [
                'title' => 'required | max:250',
                'description' => 'required',
                'thumb'=> 'max:250',
                'price' => 'required|numeric ',
                'series'=> 'required|max:250',
                'sale_date'=> 'required|date',
                'cover_image'=>'max:1000',
                'artists' => 'max:1000',
                'writers' => 'max:1000',
            ],
            [
                'title.required' => 'Il titolo è obbligatorio !',
                'title.max' => 'Il titolo deve essere lungo massimo :max caratteri !',
                'thumb.max' => 'Il thumb deve contenere massimo :max caratteri !',
                'price.required' => 'Il prezzo è obbligatorio !',
                'price.numeric' => 'Il prezzo deve contenere solo numeri ! Per delimitare il prezzo usare \'.\' e non \',\' ! ( Es: 2.58 )',
                'series.required' => 'La serie è obbligatoria !',
                'series.max' => 'La serie deve contenere massimo :max caratteri !',
                'sale_date.required' => 'La data è obbligatoria !',
                'sale_date.date' => 'Inserisci una data valida !',
                'artists.max' => 'Artisti deve essere lungo massimo :max caratteri !'

            ]

        )->validate();

        return $validator;



    }
}
