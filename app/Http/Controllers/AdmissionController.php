<?php

namespace App\Http\Controllers;
use App\Admission;

use Illuminate\Http\Request;

class AdmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        $admission = Admission::find($id);
       // dd($request);
 
        $admission->adm = $request->get('adm');
        $admission->fullname = $request->get('fullname');
        $admission->course = $request->get('course');
        $admission->level = $request->get('level');
        $admission->feyear = $request->get('feyear');
        $admission->address = $request->get('address');
        $admission->email = $request->get('email');
        $admission->mobile = $request->get('mobile');
        $admission->indexno=$request->get('indexno');
        $admission->form_generated=1;
        $admission->save();
        return view('admission.pdf',['admission'=>$admission]);
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
