<?php

namespace App\Http\Controllers;

use App\urls;
use Illuminate\Http\Request;

class UrlsController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index(urls $urlsModel)
    {
        $all=$urlsModel->all();

        return view('welcome',['urls'=>$all]);
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

        $validData=$request->validate([
            'url'=>['required','url','unique:urls','max:255']
        ]);

        try {
            $uniqueHash=substr(md5(microtime()),0,5);
            $validData['short']=$uniqueHash;
            urls::create($validData);
        } catch (\Illuminate\Database\QueryException $e){
            dd($e);
        }


        return redirect('/');
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\urls  $urls
    * @return \Illuminate\Http\Response
    */
    public function show(urls $urls)
    {
        //
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\urls  $urls
    * @return \Illuminate\Http\Response
    */
    public function edit(urls $urls)
    {
        //
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\urls  $urls
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, urls $urls)
    {
        //
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\urls  $urls
    * @return \Illuminate\Http\Response
    */
    public function destroy(urls $urls)
    {
        //
    }
}
