<?php

namespace App\Http\Controllers;

use App\Alumni;
use Illuminate\Http\Request;
use Validator;

class AlumniController extends Controller
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
        return view('alumni.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request -> validate([
            'adm'=> 'required|unique:alumnis|max:10|min:8',  
           'fullname'=> 'required', 
           'dept'=> 'required', 
           'course'=> 'required',  
           'level'=> 'required',  
           'feyear'=> 'required', 
           'feser'=> 'required', 
           'idnum' => 'required|unique:alumnis|max:8|min:8', 
           'current_address'=> 'required',  
           'permanent_address'=> 'required',
           'email'=> 'required', 
           'mobile'=> 'required|unique:alumnis|max:11|min:10',  
           'occupation'=> 'required', 
           'occupation_place'=> 'required', 
           'nextofkin'=> 'required', 
           'nextofkinadd'=> 'required', 
           'nextofkinphone'=> 'required', 
           'placeofworkadd'=> 'required', 
           'supervisoradd'=> 'required', 
           'trans'=>'nullable',
           'serial'=>'nullable'
        ], 
        [
            'adm.required' => 'Student Admission Number is required',
            'fullname.required'=>'Your Name is Required',
            'course.required'=>'Your Course is Required. It Should be in Full',
            'idnum.required'=>'Your National Identity Number is required',
            'email.required'=>'Your Email is Required. It should be unique',
            'mobile.required' => 'Mobile Phone Number is Required',
            'current_address.required'=>  'Current Mailing Address is Required',  
            'permanent_address.required'=>  'Your Permanent Address is required',
            'occupation.required'=>  'Your Current Job is Required. If Unemployed use N/A', 
            'occupation_place.required'=>  'Place of Employment is Required. If Unemployed use N/A', 
            'nextofkin.required'=>  'Next of Kin Name is Needed', 
            'nextofkinadd.required'=>  'Next of Kin Address is Required. It Can be similar with Current Address', 
            'nextofkinphone.required'=>  'Next of Kin`s Phone number is Needed', 
            'placeofworkadd.required'=>  'The Locality of your Employment is equired. If Unemployed use N/A', 
            'supervisoradd.required'=>  'Your Supervisors Phone number is Required. If Unemployed use N/A', 
            ]);
        $input = request()->all();
        $alumni = Alumni::create($input);
    
       return redirect('/')->with('message', 'You have been added as an Alumni of RVTTI');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function show(alumni $alumni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function edit(alumni $alumni)
    {
        //
      $alumni = Alumni::find($id);

       // return view('alumni.edit', compact('alumni'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
      /*  
       Validator::make($request->all(), [
            'adm'=> 'required',  
           'fullname'=> 'required', 
           'dept'=> 'required', 
           'course'=> 'required',  
           'level'=> 'required',  
           'feyear'=> 'required', 
           'feser'=> 'required', 
           'idnum' => 'required', 
           'current_address'=> 'required',  
           'permanent_address'=> 'required',
           'email'=> 'required', 
           'mobile'=> 'required',  
           'occupation'=> 'required', 
           'occupation_place'=> 'required', 
           'nextofkin'=> 'required', 
           'nextofkinadd'=> 'required', 
           'nextofkinphone'=> 'required', 
           'placeofworkadd'=> 'required', 
           'supervisoradd'=> 'required', 
        ])->validate();
        */
         $request -> validate([
            'adm'=> 'required',  
           'fullname'=> 'required', 
           'dept'=> 'required', 
           'course'=> 'required',  
           'level'=> 'required',  
           'feyear'=> 'required', 
           'feser'=> 'required', 
           'idnum' => 'required', 
           'current_address'=> 'required',  
           'permanent_address'=> 'required',
           'email'=> 'required', 
           'mobile'=> 'required',  
           'occupation'=> 'required', 
           'occupation_place'=> 'required', 
           'nextofkin'=> 'required', 
           'nextofkinadd'=> 'required', 
           'nextofkinphone'=> 'required', 
           'placeofworkadd'=> 'required', 
           'supervisoradd'=> 'required', 
           'trans'=>'nullable',
           'serial'=>'nullable'
        ], 
        [
            'adm.required' => 'Student Admission Number is required',
            'fullname.required'=>'Your Name is Required',
            'course.required'=>'Your Course is Required. It Should be in Full',
            'idnum.required'=>'Your National Identity Number is required',
            'email.required'=>'Your Email is Required. It should be unique',
            'mobile.required' => 'Mobile Phone Number is Required',
            'current_address.required'=>  'Current Mailing Address is Required',  
            'permanent_address.required'=>  'Your Permanent Address is required',
            'occupation.required'=>  'Your Current Job is Required. If Unemployed use N/A', 
            'occupation_place.required'=>  'Place of Employment is Required. If Unemployed use N/A', 
            'nextofkin.required'=>  'Next of Kin Name is Needed', 
            'nextofkinadd.required'=>  'Next of Kin Address is Required. It Can be similar with Current Address', 
            'nextofkinphone.required'=>  'Next of Kin`s Phone number is Needed', 
            'placeofworkadd.required'=>  'The Locality of your Employment is equired. If Unemployed use N/A', 
            'supervisoradd.required'=>  'Your Supervisors Phone number is Required. If Unemployed use N/A' 
            ]);
  
        $alumni = Alumni::find($id);

           //dd($request);

        $alumni->adm = $request->get('adm');
        $alumni->fullname = $request->get('fullname');
        $alumni->dept = $request->get('dept');
        $alumni->course = $request->get('course');
        $alumni->level = $request->get('level');
        $alumni->feyear = $request->get('feyear');
        $alumni->feser = $request->get('feser');
        $alumni->idnum = $request->get('idnum');
        $alumni->current_address = $request->get('current_address');
        $alumni->permanent_address = $request->get('permanent_address');
        $alumni->email = $request->get('email');
        $alumni->mobile = $request->get('mobile');
        $alumni->occupation = $request->get('occupation');
        $alumni->occupation_place = $request->get('occupation_place');
        $alumni->nextofkin = $request->get('nextofkin');
        $alumni->nextofkinadd = $request->get('nextofkinadd');
        $alumni->nextofkinphone = $request->get('nextofkinphone');
        $alumni->placeofworkadd = $request->get('placeofworkadd');
        $alumni->supervisoradd = $request->get('supervisoradd');
        $alumni->trans = $request->get('trans');
        $alumni->serial = $request->get('serial');
        $alumni->save();

       if ($request->get('trans')!=""){
        return view('alumni.pdf',['alumni'=>$alumni]);
       }else{
        return redirect('/')->with('message', 'Your details have been updated');
    }


    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function destroy(alumni $alumni)
    {
        //
    }


    public function login(){
      return view('alumni.login');
    }
}