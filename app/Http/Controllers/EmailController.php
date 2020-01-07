<?php

namespace App\Http\Controllers;

// use App\Post;
use App\Newsletter;
use App\Post;
use App\Phone;

use App\Http\Requests\EmailRequest;
use App\Http\Requests\PostRequest;
use App\Http\Requests\PhoneRequest;
class EmailController extends Controller
{

    public function getForm()
	{
		return view('home');
	}
	public function postForm(EmailRequest $request)
	{
		// dd($request);
		$email = new Newsletter;
		$email->mailing = $request->input('mailing');
		$email->save();
		
		return redirect()->route('home')->with('success', 'Email envoyée avec succès');
	}
	public function techForm(PostRequest $request)
	{
		// // dd($request);
		$post = new Post;
		$post->name = $request->input('name');
		$post->email = $request->input('email');
		$post->spécialité = $request->input('spécialité');
		$post->phone = $request->input('phone');
		$post->texte = $request->input('texte');
		$post->save();
        return redirect()->route('home')->with('success','Votre Candidature est bien envoyée');	
    }
    public function phone(PhoneRequest $request)
	{
		// // dd($request);
		$phone = new Phone;
		$phone->number = $request->input('number');
	
		$phone->save();
        return redirect()->route('home')->with('success','Nous rependrons
        le plus tôt possible');	
    }





}