<?php

namespace App\Http\Controllers;

use App\partnaire;
use Illuminate\Http\Request;

class RequestpartnaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $rules = [
        'numero' => 'required',
        'ref' => 'required',
        'objet' => 'required',
        'datelimite' => 'required',
        'statu' => 'required' ,

    ];
    public function index()
    {
        //
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
        $createRules = $this->rules;
        $validator = \Validator::make($request->all() , $createRules);
        if ($validator->fails())
            return response()->json(['errors'=>$validator->errors()],400);
        error_log('b');

        $partnaire = new partnaire();

        $partnaire->numero = $request->get('numero');
        $partnaire->ref = $request->get('ref');
        $partnaire->objet = $request->get('objet');
        $partnaire->datelimite = $request->get('datelimite');
        $partnaire->statu = $request->get('statu');
        error_log('c');

        $result = $partnaire->save();
        if(!$result)
            return response()->json($result, 500);

        else
            error_log('d');
            return response()->json(['$partnaire' => $partnaire] , 201);


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
