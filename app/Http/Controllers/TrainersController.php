<?php

namespace App\Http\Controllers;

use App\trainers;
use Illuminate\Http\Request;

class TrainersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //using pretty print is the only way Angular httpClient can successfully grab printed json_encode data
        $trainer=Trainers::get();
        echo json_encode($trainer, JSON_PRETTY_PRINT);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //eliminable si mandamos todo x api
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
        echo "hola de store";
        $trainer=new Trainers();
        $trainer->nombre = $request->nombre;
        $trainer->specialty = $request->specialty;
        //$trainer->nombre=$todo->nombre;     //no parsear request
        //$trainer->specialty=$todo->specialty;
        $trainer->save();
        echo json_encode($trainer);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\trainers  $trainers
     * @return \Illuminate\Http\Response
     */
    public function show(trainers $trainers)
    {
        //
        //$trainers=Trainers::find($trainers->id);
        echo "hola desde show";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\trainers  $trainers
     * @return \Illuminate\Http\Response
     */
    public function edit(trainers $trainers)
    {
        //eliminable si hacemos updates desde update
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\trainers  $trainers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        echo "hola desde update";
        //$trainers=Trainers::find($trainers_id);
        $trainers=trainers::find($id);
        $trainers->nombre = $request->nombre;
        $trainers->specialty = $request->specialty;
        $trainers->save();
        var_dump($trainers);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\trainers  $trainers
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $trainers=trainers::find($id);
        $trainers->delete();
    }
}
