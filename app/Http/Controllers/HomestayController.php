<?php

namespace App\Http\Controllers;

use App\homestay;
use Illuminate\Http\Request;

class HomestayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('homestay', ['data' => homestay::all()]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('homestay_insert');
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
        homestay::create([
                'nama' => $request->nama,
                'notelp' =>$request->notelp,
                'alamat' =>$request->alamat
        ]);

        return redirect(route('homestay'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\homestay  $homestay
     * @return \Illuminate\Http\Response
     */
    public function show(homestay $homestay)
    {
        //

       // $homestay = homestay::all();
        //return view('homestay', compact('homestay'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\homestay  $homestay
     * @return \Illuminate\Http\Response
     */
    public function edit(homestay $homestay)
    {
        //


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\homestay  $homestay
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, homestay $homestay)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\homestay  $homestay
     * @return \Illuminate\Http\Response
     */
    public function destroy(homestay $homestay)
    {
        //
    }
}
