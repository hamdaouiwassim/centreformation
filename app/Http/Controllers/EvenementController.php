<?php

namespace App\Http\Controllers;

use App\Evenement;
use Illuminate\Http\Request;

class EvenementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $evenements = Evenement::all();
        return view('admin.evenements.index')->with('evenements',$evenements);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.evenements.add');
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
          //
          $evenement = new Evenement();
          $evenement->titre = $request->titre;
          $evenement->description =  $request->description;
          $evenement->lieu =  $request->lieu;
          $evenement->date =  $request->date;
          $evenement->heure =  $request->heure;
          $file = $request->file('affiche');
  
          if( $request->affiche != ""){
              $filename = uniqid().".".$file->getClientOriginalExtension();
              //Move Uploaded File
              $destinationPath = 'uploads/evenements';
              $file->move($destinationPath,$filename);
              $evenement->affiche  = $filename;
          }
         
       
          $evenement->save();
          return redirect('/admin/evenements');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Evenement  $evenement
     * @return \Illuminate\Http\Response
     */
    public function show(Evenement $evenement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Evenement  $evenement
     * @return \Illuminate\Http\Response
     */
    public function edit($idevenement)
    {
        //
        return view('admin.evenements.edit')->with('evenement',Evenement::find($idevenement));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Evenement  $evenement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $evenement = Evenement::find($request->idevenement);
        $evenement->titre = $request->titre;
        $evenement->description =  $request->description;
        $evenement->lieu =  $request->lieu;
        $evenement->date =  $request->date;
        $evenement->heure =  $request->heure;
        

        $file = $request->file('affiche');

        if( $request->affiche != "" ){
            $filename = uniqid().".".$file->getClientOriginalExtension();
            //Move Uploaded File
            $destinationPath = 'uploads/evenements';
            $file->move($destinationPath,$filename);
            $evenement->affiche  = $filename;
        }
       
     
        $evenement->update();
        return redirect('/admin/evenements');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Evenement  $evenement
     * @return \Illuminate\Http\Response
     */
    public function destroy($idevenement)
    {
        //
        Evenement::find($idevenement)->delete() ;
         return redirect()->back();
    }
}
