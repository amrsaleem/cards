<?php

namespace App\Http\Controllers;
use App\Card;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CardsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cards= Card::All()->take(3);
        //return $cards;
        return view('home',compact('cards'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_card');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasfile('image')){
            $filename = $request->image->getClientOriginalName();
            $request->file('image')->storeAs('public',$filename);
            
            $card = new Card;
            $card->title= $request->title;
            $card->description= $request->description;
            $card->image=$filename;
            $card->save();
        }
           else
               return 'there is no file selected';



        //Card::create(request(['title','description','name']));
        return redirect('/cards');
    }

    public function getall(){

        $cards= Card::All();

        return view('cardlist',compact('cards'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Card $card)
    {
        return view('card',compact('card'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Card $card)
    {
        return view('edit',compact('card'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Card $card)
    {
        //dd('hello');
       // $card->update(request(['title','description']));

        if($request->hasfile('image')){
            $filename = $request->image->getClientOriginalName();
            // to-do delete the pre image
            $pre= "public/" . $card->image."";
            Storage::delete($pre);
            $request->file('image')->storeAs('public',$filename);
        }
           // $card = new Card;
            $card->title= $request->title;
            $card->description= $request->description;
            if($request->hasfile('image'))
                $card->image=$filename;
            $card->save();



        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Card $card)
    {

        $pre= "public/" . $card->image."";
        Storage::delete($pre);
        $card->delete();
        return redirect('/');
    }
}
