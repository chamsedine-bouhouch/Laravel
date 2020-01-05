<?php

namespace App\Http\Controllers;
use App\Demande;
use Illuminate\Http\Request;
use App\Http\Requests\DemandeRequest;

class DemandesController extends Controller
{
    public function post(DemandeRequest $request)
	{
		
		// // dd($request);
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
		
		return view('home');
	}
}
