<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use DB;
class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$services_db = Service::get();

    	$services = new Service;
        // $services = Service::where('categorie','électricité')->paginate(5);
        // $installation = Service::orderBy('type','installation');
        if (request()->has('categorie')){
        	$services = $services->where('categorie',request('categorie'));
        	
        }
        if ( request()->has('type')){
        	$services = $services->where('type',request('type'));
        } 

        	$services = $services->paginate(5)->appends([
        		'categorie' => request('categorie'),
        		'type' => request('type'),
        	]);
       
      


        return view('services.index',compact('services','services_db'));
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $service = Service::find($id);
        $cat=$service->categorie;
        // $similarServices = new Service;
        $similarServices =Service::where('categorie', $cat)->get();

        
        	// $similarServices->where('categorie',request('categorie'));
        	
   

      
        return view('services.show',compact('service','similarServices'));  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }
}
