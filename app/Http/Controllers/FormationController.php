<?php

namespace App\Http\Controllers;

use App\Formation;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $formations = Formation::all();
        return view('admin.formations.index')->with('formations',$formations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.formations.add');
  
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
        $formation = new Formation();
        $formation->titre = $request->titre;
        $formation->description = $request->description;
        $formation->etat = "Phase d'inscription";
        $file = $request->file('affiche');
  
        if( $request->affiche != ""){
            $filename = uniqid().".".$file->getClientOriginalExtension();
            //Move Uploaded File
            $destinationPath = 'uploads/formations';
            $file->move($destinationPath,$filename);
            $formation->affiche  = $filename;
        }
        $formation->date_debut = $request->date_debut;
        $formation->date_fin = $request->date_fin;
        $formation->duree = $request->duree;
        $formation->prix = $request->prix;
        $formation->type = $request->type;
        $formation->save();

        return redirect('/admin/formations');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function show( $idformation)
    {
        //
        $formation = Formation::find($idformation);
        return view('formations.show')->with('formation', $formation);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function edit($idformation)
    {
        //
        return view('admin.formations.edit')->with('formation',Formation::find($idformation));
 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
                //
                $formation = Formation::find($request->idformation);
                $formation->titre = $request->titre;
                $formation->description = $request->description;
                if (  $request->etat != "" ){
                    $formation->etat = $request->etat;
                }
               
                $file = $request->file('affiche');
          
                if( $request->affiche != ""){
                    $filename = uniqid().".".$file->getClientOriginalExtension();
                    //Move Uploaded File
                    $destinationPath = 'uploads/formations';
                    $file->move($destinationPath,$filename);
                    $formation->affiche  = $filename;
                }
                $formation->date_debut = $request->date_debut;
                $formation->date_fin = $request->date_fin;
                $formation->duree = $request->duree;
                $formation->prix = $request->prix;
                $formation->update();
        
                return redirect('/admin/formations');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function destroy($idformation)
    {
        //
        Formation::find($idformation)->delete() ;
        return redirect()->back();
    }

    public function list(){
        $formations = Formation::all();
        return view('formations.index')->with('formations',$formations);

    }
    public function userLoggedList(){
        $formations = Formation::all();
        return view('user.formations.index')->with('formations',$formations);
    }
}
