<?php

namespace App\Http\Controllers;
use Auth;
use App\Inscription;
use Illuminate\Http\Request;

class InscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $inscription = new Inscription();
        $inscription->fullname = $request->fullname  ;
        $inscription->email = $request->email ;
        $inscription->formation = $request->idformation ;
        $inscription->telephone = $request->telephone ;

        $inscription->save();
        return redirect('/formation/'.$request->idformation);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Inscription  $inscription
     * @return \Illuminate\Http\Response
     */
    public function show(Inscription $inscription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Inscription  $inscription
     * @return \Illuminate\Http\Response
     */
    public function edit(Inscription $inscription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Inscription  $inscription
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inscription $inscription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Inscription  $inscription
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inscription $inscription)
    {
        //
    }
    public function list(){
        $inscriptions = Inscription::where('etat','EN COURS')->get();
        return view('admin.inscriptions.index')->with('inscriptions',$inscriptions);
    }

    public function valider($idinscription){
        $inscription = Inscription::find($idinscription);
        $inscription->etat = "VALIDER";
        $inscription->update();
        return redirect()->back();
        
    }

    public function supprimer($idinscription){
        $inscription = Inscription::find($idinscription);
        $inscription->etat = "REJETER";
        $inscription->update();
        return redirect()->back();
        
    }
    public function me(){
        $inscriptions = Inscription::where('email',Auth::user()->email)->get();
        return view('user.inscriptions.index')->with('inscriptions',$inscriptions);
    }
}
