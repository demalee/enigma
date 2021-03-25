<?php

namespace App\Http\Controllers;

use App\Models\employee;
use App\Models\Es;
use Illuminate\Http\Request;

class EsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        if(auth()->user()) {
            $suppliers = Es::all();

            return view('back/supplier',compact('suppliers'));
        }
        else{
            return redirect('/');
        }
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
            $request->validate([
                'name' => 'nullable',
                'code'=>'required', 'string', 'code', 'max:255', 'unique:es',
                'phone'=>'nullable',
                'message'=>'nullable'

            ]);
            $es= new ES([
                'message' => $request->get('message'),
                'name' => $request->get('name'),
                'phone' => $request->get('phone'),
                'code' => $request->get('code')

            ]);
            $es->save();
            return back()->with('success', 'Your information has been submitted successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Es  $es
     * @return \Illuminate\Http\Response
     */
    public function show(Es $es)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Es  $es
     * @return \Illuminate\Http\Response
     */
    public function edit(Es $es)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Es  $es
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Es $es)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Es  $es
     * @return \Illuminate\Http\Response
     */
    public function destroy(Es $es)
    {
        //
    }
}
