<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tinbds;
use App\huong;

class tinbdsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $danhsach=tinbds::all();
        return response()->json($danhsach);
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
        /*//xem huong cua tin
        $tinbds=tinbds::find($id);
        $tinbds=$tinbds->huong->tenhuong;
        return response()->json($tinbds);

        //xem tin theo huong
        $huong=huong::find($id);
        $tinbds=$huong->tinbds;
        return response()->json($tinbds);*/

        //xem tin theo id
        $tinbds=tinbds::find($id);
        return response()->json($tinbds);
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
