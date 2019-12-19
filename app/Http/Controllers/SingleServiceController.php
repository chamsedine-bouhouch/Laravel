<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SingleServiceController extends Controller
{
    public function show_single_service()
	{
			return view('single-service');
	}
}