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

            $services = $services->paginate(9)->appends([
                'categorie' => request('categorie'),
                'type' => request('type'),
            ]);
       
      


        return view('HomeTemplate.Bodys.ListesServices',compact('services','services_db'));
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
            
   

      
        return view('HomeTemplate.Bodys.service',compact('service','similarServices'));  
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


    function action(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('Services')
         ->where('titre', 'like', '%'.$query.'%')
         ->orWhere('categorie', 'like', '%'.$query.'%')
   
         ->orderBy('titre', 'desc')
         ->get();
         
      }
      else
      {
       $data = DB::table('Services')
         ->orderBy('titre', 'desc')
         ->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '
        <ul>
         <li"><a href="serv'.$row->id.'" style="color:white">  '.$row->titre.'</a></li>
        
        </ul>
        ';
       }
      }
      else
      {
       $output = '
       <ul>
        <li align="center" colspan="5"style="background-color:red;">No Data Found</li>
       </ul>
       ';
      }
      $data = array(
       'table_data'  => $output,
    
      );

      echo json_encode($data);
     }
    }
}
