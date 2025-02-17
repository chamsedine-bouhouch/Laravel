<?php 

namespace App\Http\Controllers;

use App\Contact;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller {

    public function getForm()
	{
		return view('HomeTemplate.Bodys.contact');
	}

	public function postForm(ContactRequest $request)
	{
		$contact = new Contact;
		$contact->nom = $request->input('nom');
		$contact->prenom = $request->input('prenom');
		$contact->email = $request->input('email');
		$contact->texte = $request->input('texte');
		$contact->save();
		// Mail::send('email_contact', $request->all(), function($message) 
		// {
		// 	$message->to('bouhouchchamseddine@gmail.com')->subject('Contact AllooSerice');
		// });

		return redirect()->route('contact')->with('success','Votre mesage est bien réçu');
	}

}