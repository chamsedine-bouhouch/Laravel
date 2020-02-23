<?php

namespace App\Http\Controllers;

use App\Demande;
use Illuminate\Http\Request;
use App\Http\Requests\DemandeRequest;

class DemandesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Demande $model)
    {
        return view('demandes.index', ['demandes' => $model->paginate(15)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('demandes.create');    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DemandeRequest $request)
    {
        $demande = new Demande;
        $demande->catégorie = $request->input('catégorie');
        $demande->type = $request->input('type');
        $demande->service = $request->input('service');
        $demande->adresse = $request->input('adresse');
        $demande->région = $request->input('région');
        $demande->date_intervention = $request->input('date_intervention');
        $demande->horaire = $request->input('horaire');
        $demande->description = $request->input('description');
        // 
        $demande->name = $request->input('name');
        $demande->email = $request->input('email');
        $demande->phone = $request->input('phone');
        $demande->save();
        
        return redirect()->route('services')->with('success','Votre demadne est crée avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('demandes.edit', compact('demande'));

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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $demande->delete();

        return redirect()->route('demande.index')->withStatus(__('demande successfully deleted.'));
    }
}
