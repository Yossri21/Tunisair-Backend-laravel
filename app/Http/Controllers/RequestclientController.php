<?php

namespace App\Http\Controllers;

use App\requestclient;
use Illuminate\Http\Request;

class RequestclientController extends Controller
{
    private $rules = [
        'name' => 'required',
        'email' => 'required',
        'phone' => 'required',
        'website' => 'required',

    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $requestclient = requestclient::all();
       // return response()->json(['requestclient' => $requestclient] , 200);
        $requestclient = requestclient::all();
        return response()->json(['requestclient'=> $requestclient] , 200);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        error_log('a');

        $createRules = $this->rules;
        $validator = \Validator::make($request->all(), $createRules);
        if ($validator->fails())
            return response()->json(['errors'=>$validator->errors()], 400);

        error_log('b');



        $requestclient = new requestclient();

        $requestclient->name = $request->get('name');
        $requestclient->email = $request->get('email');
        $requestclient->phone = $request->get('phone');
        $requestclient->website = $request->get('website');
        $requestclient->message = $request->get('message');



        $result = $requestclient->save();
        if (!$result)
            return response()->json($result, 500);
        else
            return response()->json(['$requestclient' => $requestclient], 201);

        /*
        if (!$requestclient->save())
            return response()->json([], 500);

        $requestclient->save();
        return response()->json(['$requestclient' => $requestclient], 201);
        */

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
