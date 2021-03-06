<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\site;
use Carbon\Carbon;
use DB;
use Excel;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\CreateSitesRequest;

class SitesController extends Controller
{


   function __construct(){

        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

               
             

             $sitios = site::all();
             return view('sites.home', compact('sitios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('sites.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateSitesRequest $request)
    {
        //

        DB::table('sites')->insert([
            "address"    => $request->input('address'),
            "latitude"  => $request->input('latitude'),
            "longitude"  => $request->input('longitude'),
            "created_at" => Carbon::now(),
            "updated_at" => carbon::now(),
        ]);

        //Redireccionar

        return redirect('sites');
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


        $sitios = site::find($id);

       // dd($id);
        
        return view('sites.show', compact('sitios'));
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
       
        $sitios = site::find($id);

        return view('sites.edit', compact('sitios'));
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

        $sitio = site::find($id);
        $sitio->address  = $request->address;
        $sitio->latitude = $request->latitude;
        $sitio->longitude  = $request->longitude;
        $sitio->save();
        return redirect('sites');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

          //Eliminando USuario
                  DB::table('sites')->where('id', $id)->delete();
          
                  //Retornando Usuario
                  return redirect('sites');
    }

      public function upload()
         {
        
     
        return view('sites.upload');
      
        }



    public function ImportSites()
    {


        $file= Input::file('file');
        $file_name = $file->getClientOriginalName();
        $file->move('files', $file_name);
        $sitios = Excel::load('files/'.$file_name, function($reader)
        {

            $reader->all();

        })->get();

     
     
        return  view('sites.home',compact('sitios'));
    }
}
