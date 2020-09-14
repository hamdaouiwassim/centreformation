<?php

namespace App\Http\Controllers;

use App\Actualite;
use Illuminate\Http\Request;

class ActualiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $actualites = Actualite::all();
        return view('admin.actualites.index')->with('actualites',$actualites);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.actualites.add');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $actualite = new Actualite();
        $actualite->titre = $request->titre;
        $actualite->description =  $request->description;
        

        $file = $request->file('affiche');

        if($file){
            $filename = uniqid().".".$file->getClientOriginalExtension();
            //Move Uploaded File
            $destinationPath = 'uploads/actualites';
            $file->move($destinationPath,$filename);
            $actualite->affiche  = $filename;
        }
       
     
        $actualite->save();
        return redirect('/actualites');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Actualite  $actualite
     * @return \Illuminate\Http\Response
     */
    public function show(Actualite $actualite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Actualite  $actualite
     * @return \Illuminate\Http\Response
     */
    public function edit($idactualite)
    {
        //
        return view('admin.actualites.edit')->with('actualite',Actualite::find($idactualite));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Actualite  $actualite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $actualite = Actualite::find($request->idactualite);
        $actualite->titre = $request->titre;
        $actualite->description =  $request->description;
        

        $file = $request->file('affiche');

        if( $file != " " ){
            $filename = uniqid().".".$file->getClientOriginalExtension();
            //Move Uploaded File
            $destinationPath = 'uploads/actualites';
            $file->move($destinationPath,$filename);
            $actualite->affiche  = $filename;
        }
       
     
        $actualite->update();
        return redirect('/actualites');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Actualite  $actualite
     * @return \Illuminate\Http\Response
     */
    public function destroy($idactualite)
    {
        //
        Actualite::find($idactualite)->delete() ;
         return redirect()->back();
    }
}
