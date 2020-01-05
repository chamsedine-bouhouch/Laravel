<?php

namespace App\Http\Controllers;

// use App\Post;
use App\Newsletter;
use App\Post;

use App\Http\Requests\EmailRequest;
use App\Http\Requests\PostRequest;
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
		
		return view('home')->with('message', 'Email envoyée avec succès');
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
		$mess= 'hello';
		return view('home', ['mess' => 'Victoria']);
	}



}